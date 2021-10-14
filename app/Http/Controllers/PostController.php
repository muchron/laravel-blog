<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->filter(request(['search', 'category', 'author']));
        return view('/blog', [
            'active' => "Post",
            'title' => "All Posts ",
            'posts' => $posts->paginate(7)->withQueryString()
        ]);
    }

    public function show($slug)
    {
        $posts = Post::where('slug', "$slug")->get();
        return view('/post', [
            'active' => "Post",
            'title' => "",
            'posts' => $posts,
        ]);
    }
}
