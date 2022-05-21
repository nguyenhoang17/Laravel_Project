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
        $star5 = Review::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->where('start_count','=',5)->orderBy('created_at','DESC')-> get();
        $star4 = Review::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->where('start_count','=',4)->orderBy('created_at','DESC')-> get();
        $star3 = Review::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->where('start_count','=',3)->orderBy('created_at','DESC')-> get();
        $star2 = Review::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->where('start_count','=',2)->orderBy('created_at','DESC')-> get();
        $star1 = Review::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->where('start_count','=',1)->orderBy('created_at','DESC')-> get();
        $star_sum = Review::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->sum('start_count');
        $related_products = Product::where('status',Product::STATUS_ACTIVE)->where('price_sale','!=',0)->limit(6)->get();
        
        return view('frontend.products.detail')-> with([
            'product'=> $product,
            'images' => $images,
            'comments'=>$comments,
            'orders'=>$orders,
            'reviews'=>$reviews,
            'related_products'=>$related_products,
            'star5' => $star5,
            'star4' => $star4,
            'star3' => $star3,
            'star2' => $star2,
            'star1' => $star1,
            'star_sum' => $star_sum
            
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
            return redirect()->route('frontend.product.detail',$id)->with('success','Thêm bình luận thành công');
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
        return redirect()->route('frontend.product.detail',$id)->with('success','Thêm đánh giá thành công');
    }
}
