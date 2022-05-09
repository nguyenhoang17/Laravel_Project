<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;



class OrderController extends Controller
{
    public function index(){
        $products = Cart::content();
        return view('frontend.checkouts.checkout')->with([
            'products' => $products
        ]);
    }

    public function store(Request $request){

        $product_id = $request->get('product_id');
        $products = $request->all();
        
        // $product = Product::where('id','=',$product_id)->get();
        // $product->sell_count +=1;
        // $product->save();
        $order = new Order();
        $order-> user_id = auth()->user()->id;
        $order -> total = Cart::total();
        $order->save();
        $order->products()->attach($product_id,
            ['quantity'=>$products['quantity'] ,
            'price'=>$products['price']]
        );
       

        return redirect()->route('frontend.order.placed',auth()->user()->id);
        
        
    }
    public function orderPlaced($id){
        $orders=Order::where('user_id','=',$id)->get();
        // dd($orders);
        return view('frontend.orders.detail')->with([
            'orders' => $orders
        ]);
    }
}
