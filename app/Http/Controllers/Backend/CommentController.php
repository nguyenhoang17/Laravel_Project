<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at','DESC')->paginate(10);
        return view('backend.comments.list')->with([
            'comments'=>$comments,
        ]);

    }
    public function hide($id){
       $comment = Comment::find($id);
       if($comment->status==0){
            $comment->status = 1;
            $comment->save();
            return redirect()-> route('backend.comments.index');
       }
       


    }

    public function show($id){
        $comment = Comment::find($id);
        if($comment->status==1){
            $comment->status = 0;
            $comment->save();
            return redirect()-> route('backend.comments.index');
        }
 
 
     }
}
