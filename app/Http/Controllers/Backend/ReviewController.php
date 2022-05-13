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
        $reviews = Review::find($id);
        $reviews->status = 1;
        $reviews->save();
       return redirect()-> route('backend.reviews.index');


    }

    public function show($id){
        $reviews = Review::find($id);
        $reviews->status = 0;
        $reviews->save();
        return redirect()-> route('backend.reviews.index');
 
 
     }
}
