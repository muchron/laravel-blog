<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'slug' => $category->slug,
        'posts' => $category->post,
        'category' => $category->name,
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