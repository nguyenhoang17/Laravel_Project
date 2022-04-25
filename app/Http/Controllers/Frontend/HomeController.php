<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latest_products = Product::where('status',Product::STATUS_ACTIVE)->limit(8)-> get();
        $coming_products = Product::where('status',Product::STATUS_ACTIVE)->limit(8)-> get();
        return view('frontend.home.index')-> with([
            'latest_products'=> $latest_products,
            'coming_products' => $coming_products
        ]);
    }
}
