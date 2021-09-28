<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title' => "Home"
    ]);
});
Route::get('/blog', function () {
    return view('blog',[
        'title' => "Blog",
        'post' => Post::all()
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => "About",
        'name' => "Joko",
        'email' => "jokoding@gmail.com",
        'profile' => "profile.jpeg"
    ]);
});


$blog_new=[];
Route::get('/blog/{slug}', function ($slug) {

    foreach ($blog_post as $post) {
        if ($post['slug'] === $slug ) {
            $blog_new = $post;
        }
    }
    return view('post',[
        'title' => "Single Post",
        'post' => Post::find()
    ]);
});
