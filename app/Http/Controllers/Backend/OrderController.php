<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{

    public function index(){
        $orders = Order::orderBy('created_at','DESC')->paginate(10);
        return view('backend.orders.list')->with([
            'orders'=>$orders,
        ]);
    }
    public function confirmed($id){
        $order=Order::find($id);
        $order->status = 2;
        $order->save();
        return redirect()->route('backend.orders.index');
    }
    public function shipping($id){
        $order=Order::find($id);
        $order->status = 3;
        $order->save();
        return redirect()->route('backend.orders.index');
    }
    public function delivered($id){
        $order=Order::find($id);
        $order->status = 4;
        $order->save();
        return redirect()->route('backend.orders.index');
    }
    public function cancelled($id){
        $order=Order::find($id);
        $order->status = 5;
        $order->save();
        return redirect()->route('backend.orders.index');
    }
}
