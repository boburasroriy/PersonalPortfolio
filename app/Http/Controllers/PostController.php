<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Validation\ValidationException;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json(['posts' => $posts]);
    }
    public function store(Request $request)
    {
        try {
            $validation = $request->validate([
                'photo' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Adding validation for the photo field
                'title' => 'required|string|max:255',
                'text' => 'required',
            ]);
            $originalName = $request->file('photo')->getClientOriginalName();
            $photoPath = $request->file('photo')->storeAs('PostPhotos', $originalName);
            $post = Post::create([
                'photo' => $photoPath, // Save the file path in the 'photo' column
                'title' => $request->title,
                'text' => $request->text,
            ]);
            return response()->json(['message' => 'Your post was created'], 201);
        } catch (ValidationException $exception) {
            return response()->json(['message' => 'Errors', 'errors' => $exception->errors()], 422);
        }
    }
    public function show(Post $post)
    {
        return response()->json(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required',
        ]);
        $post->update($validation);
        return response()->json(['post' => $post]);

    }



    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['post deleted'], 204);
    }
}
