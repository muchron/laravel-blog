<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    public static function all()
    {
        return Post::where('tb_post')->get;
    }   
}
