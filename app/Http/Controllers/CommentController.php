<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    function store(Request $request, $post_id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);
        $comment = new Comment([
            'content' => $request->input('content'),
            'user_id' => Auth::user()->getAuthIdentifier(),
            'post_id' => $post_id,
        ]);
        $comment->save();
        return redirect()->route('posts.show', ['post' => $post_id]);
    }

}
