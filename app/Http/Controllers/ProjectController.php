<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Nette\Schema\ValidationException;

class ProjectController extends Controller
{
    public function index()
    {
        $projectPost = Project::all();
        return response()->json(['portfolio_posts' => $projectPost]);
    }
    public function store(Request $request)
    {
        try{
            $validation = $request->validate([
                'portfolio_photo' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
                'portfolio_title' => 'required|string|max:255',
                'portfolio_text' => 'required',
            ]);
            $originalName = $request->file('portfolio_photo')->getClientOriginalName();
            $photoPath = $request->file('portfolio_photo')->storeAs('PortfolioPhotos', $originalName);
            $projectPost = Project::create([
                'portfolio_photo' => $photoPath,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_text' => $request->portfolio_text,
            ]);
            return response()->json(['message' => 'Your post was created'], 201);
        } catch (ValidationException $exception) {
            return response()->json(['message' => 'Errors', 'errors' => $exception->errors()], 422);
        }

    }
    public function show(Request $request, Project $projectPost){
        return  response()->json(['portfolio_posts' => $projectPost]);
    }
    public function update(Request $request, Project $projectPost)
    {
        try {
            $validation = $request->validate([
           'portfolio_photo' => 'mimes:jpeg,png,jpg,gif|max:2048',
           'portfolio_title' => 'string|max:255',
           'portfolio_text' => 'string|max:255',
       ]);
       if ($request->has('portfolio_title')){
           $projectPost->portfolio_title = $request->portfolio_title;
       }
        if ($request->has('portfolio_text')){
            $projectPost->portfolio_text = $request->portfolio_text;
        }
        if ($request->hasFile('portfolio_photo')){
            Storage::delete($projectPost->portfolio_photo);
            $originalName = $request->file('portfolio_photo')->getClientOriginalName();
            $photoPath = $request->file('portfolio_photo')->storeAs('PortfolioPhotos' . $originalName);
            $projectPost->portfolio_photo = $photoPath;
        }
        $projectPost->save();
        return response()->json(['message' => 'ProjectPost updated successfully', 'ProjectPost' => $projectPost], 200);
        } catch (ValidationException $exception) {
            return response()->json(['message' => 'Errors', 'errors' => $exception->errors()], 422);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Error updating post', 'error' => $exception->getMessage()], 500);
        }
    }
    public function destroy(Project $projectPost)
    {
        $projectPost->delete();
        return response("the post " . $projectPost->id . ' is deleted');
    }

}
