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
                'photo' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|string|max:255',
                'text' => 'required',
            ]);
            $originalName = $request->file('photo')->getClientOriginalName();
            $photoPath = $request->file('photo')->storeAs('PostPhotos', $originalName);
            $post = Post::create([
                'photo' => $photoPath,
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
        try {
            $validation = $request->validate([
                'title' => 'required|string|max:255',
                'text' => 'required|string|max:255',
                'photo' => 'mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->has('title')) {
                $post->title = $request->title;
            }
            if ($request->has('text')) {
                $post->text = $request->text;
            }
            if ($request->hasFile('photo')) {
                Storage::delete($post->photo);
                $originalName = $request->file('photo')->getClientOriginalName();
                $photoPath = $request->file('photo')->storeAs('PostPhotos', $originalName);
                $post->photo = $photoPath;
            }
            $post->save();
            return response()->json(['message' => 'Post updated successfully', 'post' => $post], 200);
        } catch (ValidationException $exception) {
            return response()->json(['message' => 'Errors', 'errors' => $exception->errors()], 422);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Error updating post', 'error' => $exception->getMessage()], 500);
        }
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return response("the post " . $post->id . ' is deleted');
    }
}
