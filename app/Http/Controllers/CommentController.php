<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $comment = Comment::create([
            'body' => $request->body,
        ]);

        // Return a success response
        return response()->json(['message' => 'Your comment was posted'], 200);
    }
}
