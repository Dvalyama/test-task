<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $posts = Post::create($request->all());
        return response()->json($posts, 201);;
    }    

    public function show($id)
    {
        $posts = Post::find($id);
        return response()->json($posts);;
    }    

    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->update($request->all());
        return response()->json($posts, 200);
    }   

    public function delete($id)
    {
        Post::destroy($id);
        return response()->json(null, 204);
    }    

}