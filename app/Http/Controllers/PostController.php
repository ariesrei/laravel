<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request) 
    {
        $this->validate($request, 
        [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
 
        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body
        ]);


        return back();
    }

}
