<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        'active' => "active",
        'title' => 'Wellcome '
    ]);
});
Route::get('/post', [PostController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function (Category $category) {
    return view(
        'blog',
        [
            'active'  => "post",
            'title' => "Post by Category : $category->name",
            'slug' => $category->slug,
            'posts' => $category->post->load('category', 'user'),
        ]
    );
});
Route::get('/about', function () {
    return view('about', [
        'active' => "about",
        'title' => "About",
        'name' => "Joko",
        'email' => "jokoding@gmail.com",
        'profile' => "profile.jpeg"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
