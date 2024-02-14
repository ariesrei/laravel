<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function post()
    {
        $posts = User::find( Auth::user()->id )->posts;

        return view('dashboard.post', [
            'posts' => $posts
        ]);
    }



    public function store_post(Request $request)
    {

        $this->validate($request, 
        [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        if( $request->user()->posts()->create($request->only('title', 'body')) )
        {
            return back()->with('status', 'Post added successfully.');
        }

    }
}
