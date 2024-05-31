<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'content' => 'required|string|max:500',
        ]);

        $comment = new Comment();
        $comment->user_name = $request->input('user_name');
        $comment->content = $request->input('content');
        $comment->product_id = $request->input('product_id'); // assuming you have a product_id field
        $comment->save();

        return back()->with('success', 'Comment added successfully!');
    }
}

