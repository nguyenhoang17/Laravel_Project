<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews =Review::orderBy('created_at','DESC')->paginate(10);
        return view('backend.reviews.list')->with([
            'reviews'=>$reviews,
        ]);

    }
    public function hide($id){
        $review = Review::find($id);
        if($review->status==0){
            $review->status = 1;
            $review->save();
           return redirect()-> route('backend.reviews.index');
        }
       


    }

    public function show($id){
        
        $review = Review::find($id);
        if($review->status==1){
            $review->status = 0;
            $review->save();
            return redirect()-> route('backend.reviews.index');
        }
        
 
 
     }
}
