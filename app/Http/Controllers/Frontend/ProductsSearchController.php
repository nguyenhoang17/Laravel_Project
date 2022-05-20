<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsSearchController extends Controller
{
    public function index(){
        $name = \request()-> get('name');
        
        $products_query= Product::select();
            if(!empty($name)){
                $products_query = $products_query -> where('name', "LIKE", "%$name%");
            }
        
            $products = $products_query->orderBy('created_at','desc')->paginate(6);
        $categories= Category::all();
        $brands = Brand::all();
        $related_products = Product::where('status',Product::STATUS_ACTIVE)->where('price_sale','!=',0)->limit(6)->get();

        
        
        return view('frontend.products.search', [
            'brands'=> $brands, 
            'categories'=>$categories,
            'products'=> $products,
            'related_products' => $related_products
        ]);
    }
}
