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
        // dd($products);
        return view('frontend.carts.cart')-> with([
            'products'=> $products,
        ]);
        
    }

    public function add(Request $request, $id){
        $data = $request->all();
        $product = Product::find($id);
        if($data['qty']> $product->quantity){
            $request->session()->flash('error', 'Mặt hàng chỉ còn '.$product->quantity.' sản phẩm');
            return redirect()->route('frontend.product.detail',$id);
            
        }
        else{
        Cart::add($product->id, $product->name, $data['qty'], $product->price_origin);
        return redirect()->route('frontend.carts.index');
        }
    }

    public function down($rowId, $qty)
    {
        
       Cart::update($rowId,$qty-1);
        return redirect()->route('frontend.carts.index');
    }

    

    public function remove($rowId){
        Cart::remove($rowId);
        return redirect()->route('frontend.carts.index');
    }
    public function destroy(){
        Cart::destroy();
        return redirect()->route('frontend.carts.index');
    }
}
