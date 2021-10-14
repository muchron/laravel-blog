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
        Category::create(
            [
                'name' => 'Development and Operations',
                'slug' => 'devops',
            ]
        );
        Category::create(
            [
                'name' => 'Version Control',
                'slug' => 'version-control',
            ]
        );
        Category::create(
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
            ]
        );
        Category::create(
            [
                'name' => 'Algoritm',
                'slug' => 'algorithm',
            ]
        );
        Category::create(
            [
                'name' => 'Web Programming',
                'slug' => 'web-programming',
            ]
        );
        Category::create(
            [
                'name' => 'Mobile Programming',
                'slug' => 'mobile-programming',
            ]
        );
        User::factory(5)->create();
        Post::factory(100)->create();
    }
}
