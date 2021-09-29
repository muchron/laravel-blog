<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guard =['id'];
    protected $fillable =['categories_id', 'title', 'author', 'slug', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
// Post::create([
//     'categories_id' => 2,
//     'title' => "Judul Ke Dua",
//     'author' => "Budi",
//     'slug'  => "judul-ke-dua",
//     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, adipisci.",
//     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p><p> Labore veniam itaque tempora officiis accusamus, perspiciatis repellendus distinctio! Ipsum quasi nisi dignissimos, modi quia voluptate sed, deserunt dolor accusamus, quibusdam in cum vel doloremque perferendis. Eos enim dignissimos, pariatur sed deleniti voluptatibus ad eveniet numquam possimus rem eum velit eius earum!</p>",
// ]);
// Post::create([
//     'categories_id' => 1,
//     'title' => "Judul Ke Tiga",
//     'author' => "Budi",
//     'slug'  => "judul-ke-tiga",
//     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, adipisci.",
//     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p><p> Labore veniam itaque tempora officiis accusamus, perspiciatis repellendus distinctio! Ipsum quasi nisi dignissimos, modi quia voluptate sed, deserunt dolor accusamus, quibusdam in cum vel doloremque perferendis. Eos enim dignissimos, pariatur sed deleniti voluptatibus ad eveniet numquam possimus rem eum velit eius earum!</p>",
// ]);
// Post::create([
//     'categories_id' => 3,
//     'title' => "Judul Ke Empat",
//     'author' => "Joko",
//     'slug'  => "judul-ke-empat",
//     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, adipisci.",
//     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p><p> Labore veniam itaque tempora officiis accusamus, perspiciatis repellendus distinctio! Ipsum quasi nisi dignissimos, modi quia voluptate sed, deserunt dolor accusamus, quibusdam in cum vel doloremque perferendis. Eos enim dignissimos, pariatur sed deleniti voluptatibus ad eveniet numquam possimus rem eum velit eius earum!</p>",
// ]);
// Post::create([
//     'categories_id' => 3,
//     'title' => "Judul Ke Lima",
//     'author' => "Joko",
//     'slug'  => "judul-ke-lima",
//     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, adipisci.",
//     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p><p> Labore veniam itaque tempora officiis accusamus, perspiciatis repellendus distinctio! Ipsum quasi nisi dignissimos, modi quia voluptate sed, deserunt dolor accusamus, quibusdam in cum vel doloremque perferendis. Eos enim dignissimos, pariatur sed deleniti voluptatibus ad eveniet numquam possimus rem eum velit eius earum!</p>",
// ]);
