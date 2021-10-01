<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        Post::factory(10)->create();
        
        // Category::create(
        //     [
        //         'name' => 'Web Programing',
        //         'slug' => 'web-programing',
        //     ]
        // );
        // Category::create(
        //     [
        //         'name' => 'Programming',
        //         'slug' => 'programming',
        //     ]
        // );
        // Category::create(
        //     [
        //         'name' => 'Personal',
        //         'slug' => 'personal',
        //     ]
        // );
    }
}
