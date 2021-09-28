<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }
}
