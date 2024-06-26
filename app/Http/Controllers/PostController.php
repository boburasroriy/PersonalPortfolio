<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Validation\ValidationException;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(9);
        $categories = Category::all();
        // Initialize $selectedCategoryId with null as no category is initially selected
        $selectedCategoryId = null;
        return view('Posts.index', compact('posts', 'categories', 'selectedCategoryId'));
    }

    public function CategoryShow($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts()->orderBy('created_at', 'desc')->paginate(9);
        $categories = Category::all();
        $selectedCategoryId = $category->id;
        return view('Posts.index', compact('category', 'posts', 'categories', 'selectedCategoryId'));
    }

    public function filter(Request $request)
    {
        $categoryId = $request->input('category_id');
        $selectedCategoryId = null;
        $category = null;

        if ($categoryId) {
            $category = Category::findOrFail($categoryId);
            $posts = $category->posts()->orderBy('created_at', 'desc')->paginate(9);
            $selectedCategoryId = $categoryId;
        } else {
            $posts = Post::orderBy('created_at', 'desc')->paginate(9);
        }
        $categories = Category::all();
        return view('Posts.index', compact('category', 'posts', 'categories', 'selectedCategoryId'));
    }

    public function create()
    {
        return view('Posts.create')->with(['categories' => Category::all()]);
    }
    public function store(Request $request)
    {
        try {
            $validation = $request->validate([
                'photo' => 'required|mimes:jpeg,png,jpg,gif,webp',
                'title' => 'required|string|max:255',
                'text' => 'required',
            ]);
            $originalName = $request->file('photo')->getClientOriginalName();
            $photoPath = $request->file('photo')->storeAs('post-photos', $originalName);
            $post = Post::create([
                'category_id' => $request->category_id,
                'photo' => $photoPath,
                'title' => $request->title,
                'text' => $request->text,
            ]);
            return redirect()->back()->with(['message' => 'Post created successfully']);
        } catch (ValidationException $exception) {
            return response()->json(['message' => 'Errors', 'errors' => $exception->errors()], 422);
        }
    }
    public function show(Post $post)
    {
        return view('Posts.show', compact('post'));
    }
    function edit(Post $post)
    {
        return view('Posts.edit', compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        try {
            $validation = $request->validate([
                'title' => 'required|string',
                'text' => 'required|string',
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
            return redirect()->back()->with(['message' => 'Post updated successfully']);

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
