<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
//    public function likePost(Request $request, $postId) {
//        // Ensure the user is authenticated
//        $user = auth()->user();
//
//        // Check if the post is already liked
//        $existingLike = Like::where('post_id', $postId)->where('user_id', $user->id)->first();
//        if ($existingLike) {
////            return response(['message' => 'Post already liked'], 400);
//            return redirect()->back();
//
//        }
//        $like = new Like();
//        $like->post_id = $postId;
//        $like->user_id = $user->id;
//        $like->save();
//        return redirect()->back();
//
//    }
//    public function unlikePost(Request $request, $postId) {
//        $user = auth()->user();
//        $like = Like::where('post_id', $postId)->where('user_id', $user->id)->first();
//        if (!$like) {
//            return redirect()->back();
//        }
//
//        $like->delete();
//
//        return redirect()->back();
//    }
//

    public function likePost(Request $request, $postId)
    {
        $user = auth()->user();

        // Check if the post is already liked
        $existingLike = Like::where('post_id', $postId)->where('user_id', $user->id)->first();
        if ($existingLike) {
            return response(['likes_count' => Like::where('post_id', $postId)->count()], 200);
        }

        // Add the like
        $like = new Like();
        $like->post_id = $postId;
        $like->user_id = $user->id;
        $like->save();

        return response(['likes_count' => Like::where('post_id', $postId)->count()], 200);
    }

    public function unlikePost(Request $request, $postId)
    {
        $user = auth()->user();
        $like = Like::where('post_id', $postId)->where('user_id', $user->id)->first();
        if (!$like) {
            return response(['likes_count' => Like::where('post_id', $postId)->count()], 200);
        }

        // Remove the like
        $like->delete();

        return response(['likes_count' => Like::where('post_id', $postId)->count()], 200);
    }

}
