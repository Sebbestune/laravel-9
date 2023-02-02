<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('add-post');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('add.post')->with('status', 'New post added successfully!');
    }

    public function update(Request $request)
    {
        Post::where('id', $request->id)
            ->update(['description' => $request->newDescription]);
    }

    public function readAll()
    {
        // logic to get all orders goes here
        $posts = Post::get();
        return view('showposts', ['posts' => $posts]);
    }

    public function deletePost(Request $request)
    {
        $post = Post::find($request->myid);
        $post->delete();
    }
}
