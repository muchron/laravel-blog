<?php

use App\Models\Post;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
// Route::get('/blog', Controller);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function(Categories $category ){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->post,
        'name' => $category->name,
    ]
    );
     
});

Route::get('/about', function () {
    return view('about',[
        'title' => "About",
        'name' => "Joko",
        'email' => "jokoding@gmail.com",
        'profile' => "profile.jpeg"
    ]);
});