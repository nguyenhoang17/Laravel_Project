<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $products = Cart::content();
       
        return view('frontend.carts.cart')-> with([
            'products'=> $products,
        ]);
        
    }

    public function add($id){
        $product = Product::find($id);
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        Cart::add($product->id, $product->name, 1, $product->price_origin);
        return redirect()->route('frontend.carts.index');
    }
}
