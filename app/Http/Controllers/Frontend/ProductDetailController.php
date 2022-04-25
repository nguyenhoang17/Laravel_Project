<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function productDetail($id){
        $product = Product::find($id);
        return view('frontend.products.detail')-> with([
            'product'=> $product
        ]);
    }
}
