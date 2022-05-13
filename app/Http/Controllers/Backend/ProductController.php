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
        
        $products = Product::with('image')->orderBy('created_at','desc')->paginate(15);
        // foreach($products as $product){

        // }
        return view('backend.products.list')-> with([
            'products' => $products,
            'images' => $images
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
        
        // dd($request->only('images'));
        $data = $request-> all();
        $product = new Product();
        $product -> name = $data['name'];
        $product -> category_id = $data['category_id'];
        $product -> description = $data['description'];
        $product -> quantity = $data['quantity'];
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
        $request->session()->flash('success', 'Created product successfully');
        
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
    {
        $data = $request -> all();
        $product = Product::find($id);
        
        $product -> name = $data['name'];
        $product -> category_id = $data['category_id'];
        $product -> description = $data['description'];
        $product -> quantity = $data['quantity'];
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
        $request->session()->flash('success', 'Created product successfully');
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
        Product::find($id)->delete($id);
        Image::where('product_id','=',$id)->delete();
        return redirect()-> route('backend.products.index')->with('success', 'Deleted category successfully');
    }
}
