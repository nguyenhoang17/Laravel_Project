<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        $categories = Category::all();
        $brands = Brand::all();

        $name = \request()-> get('name');
        $category_id = \request()->get('category_id');
        $brand_id = \request()->get('brand_id');
       
        $products_query= Product::
        select();
            if(!empty($name)){
                $products_query =  $products_query -> where('name', "LIKE", "%$name%");
            }

            if(!empty($category_id)){
                $products_query =  $products_query -> where('category_id',$category_id);
            }
          
        
        $products = $products_query->with('image')->orderBy('created_at','desc')->paginate(15);
        // foreach($products as $product){

        // }
        return view('backend.products.list')-> with([
            'products' => $products,
            'images' => $images,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::get();
        $brands=Brand::get();
        return view('backend.products.create')-> with([
            'categories'=> $categories,
            'brands'=>$brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'name' => 'required|unique:products|max:255|string',
            'images[]' => 'mimes:jpg,png,jpeg,gif,svg|max:204',
            'description'=> 'required|string',
            'category_id'=> 'required|numeric',
            'brand_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price_input'=> 'required|numeric',
            'price_sale' => 'required|numeric|gt:price_input|',
            'price_origin'=> 'required|numeric|gt:price_input|gt:price_sale',
           

        ]);
        // dd($request->only('images'));
        $data = $request-> all();
        $product = new Product();
        $product -> name = $data['name'];
        $product -> category_id = $data['category_id'];
        $product -> description = $data['description'];
        $product -> quantity = $data['quantity'];
        $product -> price_input = $data['price_input'];
        $product -> price_origin = $data['price_origin'];
        $product -> price_sale = $data['price_sale'];
        $product->status = $data['status'];
        $product->user_id=$data['user_id'];
        $product->brand_id=$data['brand_id'];
        $product-> save();
        if($request->hasFile('images')){
            foreach($request->images as $image){
                $disk = 'images';
               $name = time().'_'.$image->getClientOriginalName();
              
               $path = Storage::disk($disk)->putFileAs('products',$image,$name);
               $url = Storage::disk($disk)->url($path);
               $image = new Image();
               $image-> name = $name;
               $image->disk=$disk;
               $image->path= $url;
               $image->product_id = $product->id;
               $image -> save();
               
            }
        }
        $request->session()->flash('success', 'Tạo sản phẩm thành công');
        
        return redirect()->route('backend.products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::get();
        $brands=Brand::get();
        $product = Product::find($id);
        $images = Image::where('product_id','=',$id)->get();
        
        return view('backend.products.edit')-> with([
            'product'=> $product,
            'categories'=>$categories,
            'images'=>$images,
            'brands'=>$brands
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$validated = $request -> validate([
        'name' => 'required|max:255|string|unique:products',
        'images[]' => 'mimes:jpg,png,jpeg,gif,svg',
        'description'=> 'required|string',
        'category_id'=> 'required|numeric',
        'brand_id' => 'required|numeric',
        'quantity' => 'required|numeric',
        'price_input'=> 'required|numeric',
        'price_sale' => 'required|numeric|gt:price_input|',
        'price_origin'=> 'required|numeric|gt:price_input|gt:price_sale',

    ]);
        
        $data = $request -> all();
        $product = Product::find($id);
        $this->authorize('update',$product);
        $product->name = $data['name'];
        $product->category_id = $data['category_id'];
        $product-> description = $data['description'];
        $product -> quantity = $data['quantity'];
        $product -> price_input = $data['price_input'];
        $product -> price_origin = $data['price_origin'];
        $product -> price_sale = $data['price_sale'];
        $product->status = $data['status'];
        $product->user_id=$data['user_id'];
        $product-> save();
        if($request->hasFile('images')){
            foreach($request->images as $image){
                $disk = 'images';
               $name = time().'_'.$image->getClientOriginalName();
              
               $path = Storage::disk($disk)->putFileAs('products',$image,$name);
               $url = Storage::disk($disk)->url($path);
               $image = new Image();
               $image-> name = $name;
               $image->disk=$disk;
               $image->path= $url;
               $image->product_id = $product->id;
               $image -> save();
               
            }
        }
        $deleteImg = $request->delete_img;
        if (!empty($deleteImg)) {
            foreach ($deleteImg as $dete) {
                $imgDelete = Image::find($dete);
                Storage::disk('images')->delete($imgDelete->path);
                $imgDelete->delete();
            }
        }
        $request->session()->flash('success', 'Cập nhật sản phẩm thành công');
        // dd($product);
        return redirect()->route('backend.products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $this->authorize('update', $product);
        $product->delete($id);
        Image::where('product_id', $id)->delete();
        return redirect()-> route('backend.products.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
