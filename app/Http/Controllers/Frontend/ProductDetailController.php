<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Image;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function productDetail($id){
        $product = Product::find($id);
        $images = Image::where('product_id','=',$id)->get();
        
        $comments = Comment::whereHas('product', function($query) use($id){
            $query-> where('product_id', '=', $id);
        })->where('status','=',0)->limit(6)->orderBy('created_at','DESC')-> get();
        
        return view('frontend.products.detail')-> with([
            'product'=> $product,
            'images' => $images,
            'comments'=>$comments,
        ]);
    }

    public function addComment(Request $request, $id){
        $data = $request->all();
        $comment = new Comment();
        $comment->user_id= auth()->user()->id;
        $comment->product_id = $id;
        $comment->content = $data['content'];
        $comment->save();
        return redirect()->route('frontend.product.detail',$id);
    }
}
