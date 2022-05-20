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
        $imgProduct = Product::get();
        // dd($imgProduct);
        return view('frontend.carts.cart')-> with([
            'products'=> $products,
            'imgProduct'=>$imgProduct
        ]);
        
    }

    public function add(Request $request, $id){
        $data = $request->all();
        if(!empty($data['qty'])){
            $qty = $data['qty'];
        }else{
            $qty = 1;
        }
        $product = Product::find($id);
        if($qty>$product->quantity){
            $request->session()->flash('error', 'Mặt hàng chỉ còn '.$product->quantity.' sản phẩm');
            return redirect()->route('frontend.product.detail',$id);
            
        }
        else{
           
        Cart::add($product->id, $product->name, $qty, $product->price_sale);
        $request->session()->flash('success', 'Thêm thành công vào giỏ hàng');
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
        return redirect()->route('frontend.carts.index')->with('success', 'Xóa khỏi giỏ hàng thành công');
    }
    public function destroy(){
        Cart::destroy();
        return redirect()->route('frontend.carts.index')->with('success', 'Làm mới giỏ hàng thành công');
    }
}
