<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        
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

    public function singlePost($slug)
    {
        $post = Post::where('id', $slug)->first();

        $data = [
            'title' => $post->title,
            'body'  => $post->body
        ];

        return view('posts.single_post', $data);
    }
}
