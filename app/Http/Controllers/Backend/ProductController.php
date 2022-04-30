<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->paginate(15);
        return view('backend.products.list')-> with([
            'products' => $products
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
        return view('backend.products.create')-> with([
            'categories'=> $categories
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
        $product-> save();
        $request->session()->flash('success', 'Created product successfully');
        // dd($product);
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
        $product = Product::find($id);
        return view('backend.products.edit')-> with([
            'product'=> $product,
            'categories'=>$categories
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
        return redirect()-> route('backend.products.index')->with('success', 'Deleted category successfully');
    }
}
