<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('/blog', [
            'title' => "All Posts",
            // 'posts' => Post::all() 
            'posts' => Post::latest()->get()
        ]);
    }
    
    public function show($slug)
    {
        return view('/post', [
            'title' => "Single Post",
            'posts' => Post::where('slug', "$slug")->get()
        ]);
    }
}
