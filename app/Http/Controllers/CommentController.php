<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $comment = new Comment();

        $comment->text = $request->input('text');
        $comment->product_id = $request->input('product_id');
        // $comment->user_name = $request->input('user_name');
        $comment->save();

        return redirect()->route('products.show', $comment->product_id);
    }
}
