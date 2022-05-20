<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function productDetail($id){
        $orders = Order::all();
        
        $product = Product::find($id);
        $images = Image::where('product_id','=',$id)->get();
        
        $comments = Comment::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->limit(6)->orderBy('created_at','DESC')-> get();
        $reviews = Review::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->limit(6)->orderBy('created_at','DESC')-> get();
        $related_products = Product::where('status',Product::STATUS_ACTIVE)->where('price_sale','!=',0)->limit(6)->get();
        
        return view('frontend.products.detail')-> with([
            'product'=> $product,
            'images' => $images,
            'comments'=>$comments,
            'orders'=>$orders,
            'reviews'=>$reviews,
            'related_products'=>$related_products
            
        ]);
    }

    public function addComment(Request $request, $id){
        if(auth()->check()){
            $data = $request->all();
            $comment = new Comment();
            $comment->user_id= auth()->user()->id;
            $comment->product_id = $id;
            $comment->content = $data['content'];
            $comment->save();
            return redirect()->route('frontend.product.detail',$id);
        }
        
    }

    public function addReview(Request $request, $id){

        $data = $request->all();
        $review = new Review();
        $review->user_id= auth()->user()->id;
        $review->product_id = $id;
        $review->content = $data['review'];
        $review->start_count=$data['start'];
        $review->save();
        $product = Product::find($id);
        $product->review_count +=1;
        $product->save();
        return redirect()->route('frontend.product.detail',$id);
    }
}
