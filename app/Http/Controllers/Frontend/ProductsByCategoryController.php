<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductsByCategoryController extends Controller
{
    public function productByCategory($id){
        $categories = Category::get();
        $productsByCategory = Product::whereHas('category', function($query) use($id){
            $query-> where('category_id', '=', $id);
        })->limit(6)-> get();
       
        return view('frontend.products.category')-> with([
            'productsByCategory' => $productsByCategory,
            'categories'=> $categories
        ]);
    }
}
