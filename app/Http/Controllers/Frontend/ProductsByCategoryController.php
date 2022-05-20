<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductsByCategoryController extends Controller
{
    public function productByCategory($id){
        $categories = Category::get();
        $brands = Brand::get();
        // $productsByCategory = Product::whereHas('category', function($query) use($id){
        //     $query-> where('category_id', '=', $id);
        // })->limit(6)-> get();
        $productsByCategory = Product::whereHas('category', function($query) use($id){
            $query-> where('category_id', '=', $id);
        })->paginate(6);
        $related_products = Product::where('status',Product::STATUS_ACTIVE)->where('price_sale','!=',0)->limit(6)->get();
       
        return view('frontend.products.category')-> with([
            'productsByCategory' => $productsByCategory,
            'categories'=> $categories,
            'related_products'=>$related_products,
            'brands'=>$brands
        ]);
    }

    public function productByBrand($id){
        $categories = Category::get();
        $brands = Brand::get();
        // $productsByCategory = Product::whereHas('category', function($query) use($id){
        //     $query-> where('category_id', '=', $id);
        // })->limit(6)-> get();
        $productsByBrand = Product::whereHas('brand', function($query) use($id){
            $query-> where('brand_id', '=', $id);
        })->orderBy('created_at','DESC')->paginate(6);
        $related_products = Product::where('status',Product::STATUS_ACTIVE)->where('price_sale','!=',0)->limit(6)->get();
       
        return view('frontend.products.brand')-> with([
            'productsByBrand' => $productsByBrand,
            'categories'=> $categories,
            'related_products'=>$related_products,
            'brands'=>$brands
        ]);
    }
}
