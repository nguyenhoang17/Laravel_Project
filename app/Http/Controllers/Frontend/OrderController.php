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
        $data=$request-> all();

        
        $products = Cart::content();
        
        $order = new Order();
        $order-> user_id = auth()->user()->id;
        $order -> total = Cart::total();
        $order->note=$data['note'];
        $order->save();
        foreach($products as $item){
            $data = Product::where('id','=',$item->id)->get();
            $data[0]->sell_count = $data[0]->sell_count + $item->qty ;
            $data[0]->quantity = $data[0]->quantity - $item->qty ;
           $data[0]->save();

           $order->products()->attach($item->id,
           ['quantity'=>$item->qty ,
           'price'=>$item->price]
       );
            
        }
         Cart::destroy();     
       

        return redirect()->route('frontend.order.placed',auth()->user()->id);
        
        
    }
    public function requestCancellation($id){
        $order = Order::find($id);
        $order->status = 5;
        $order->save();
        return redirect()->route('frontend.order.placed',auth()->user()->id);


    }
    public function orderPlaced($id){
        $orders=Order::where('user_id','=',$id)->orderBy('status')->orderBy('created_at','DESC')->get();
        // dd($orders);
        return view('frontend.orders.detail')->with([
            'orders' => $orders
        ]);
    }
}
