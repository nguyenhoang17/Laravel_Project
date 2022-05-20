<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latest_products = Product::where('status',Product::STATUS_ACTIVE)->limit(8)->orderBy('created_at','DESC')-> get();
        $selling_products = Product::where('status',Product::STATUS_ACTIVE)->limit(8)->orderBy('sell_count','DESC')-> get();
        $related_products = Product::where('status',Product::STATUS_ACTIVE)->where('price_sale','!=',0)->limit(6)->get();
        $categories = Category::limit(4)->get();
        $brands = Brand::limit(5)->get();
        // dd($related_products);
        return view('frontend.home.index')-> with([
            'latest_products'=> $latest_products,
            'selling_products' => $selling_products,
            'related_products'=>$related_products,
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
}
