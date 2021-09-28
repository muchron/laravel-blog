<?php

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
        'post' => [
            [
                'title' => "Judul Artikel Pertama",
                'slug' => "judul-artikel-pertama",
                'author' => "Budi Suherman",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorem excepturi similique hic cumque impedit tempore iste molestiae, a nesciunt architecto molestias quo! Laborum quae voluptas modi rerum eum et.",
            ],
            [
                'title' => "Judul Artikel Kedua",
                'slug' => "judul-artikel-kedua",
                'author' => "Joko Susilo",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorem excepturi similique hic cumque impedit tempore iste molestiae, a nesciunt architecto molestias quo! Laborum quae voluptas modi rerum eum et.",
            ],
            [
                'title' => "Judul Artikel Ketiga",
                'slug' => "judul-artikel-ketiga",
                'author' => "Agustinus Septian",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorem excepturi similique hic cumque impedit tempore iste molestiae, a nesciunt architecto molestias quo! Laborum quae voluptas modi rerum eum et.",
            ]
        ]
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
    $blog_post = [
        [
            'title' => "Judul Artikel Pertama",
            'slug' => "judul-artikel-pertama",
            'author' => "Budi Suherman",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorem excepturi similique hic cumque impedit tempore iste molestiae, a nesciunt architecto molestias quo! Laborum quae voluptas modi rerum eum et.",
        ],
        [
            'title' => "Judul Artikel Kedua",
            'slug' => "judul-artikel-kedua",
            'author' => "Joko Susilo",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorem excepturi similique hic cumque impedit tempore iste molestiae, a nesciunt architecto molestias quo! Laborum quae voluptas modi rerum eum et.",
        ],
        [
            'title' => "Judul Artikel Ketiga",
            'slug' => "judul-artikel-ketiga",
            'author' => "Agustinus Septian",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorem excepturi similique hic cumque impedit tempore iste molestiae, a nesciunt architecto molestias quo! Laborum quae voluptas modi rerum eum et.",
        ]
    ];
    foreach ($blog_post as $post) {
        if ($post['slug'] === $slug ) {
            $blog_new = $post;
        }
    }
    return view('post',[
        'title' => "Single Post",
        'post' => $blog_new
    ]);
});
