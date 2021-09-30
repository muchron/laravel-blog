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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'  => 'Joko Sulistyo',
            'email' => 'jokosulis900@jokoding.com',
            'password' => bcrypt('12345')
        ]);
        
        User::create([
            'name'  => 'Budi Setiawan',
            'email' => 'setiawanbds@jokoding.com',
            'password' => bcrypt('12345')
        ]);

        Category::create(
            [
                'name' => 'Web Programing',
                'slug' => 'web-programing',
            ]
        );
        Category::create(
            [
                'name' => 'Programming',
                'slug' => 'programming',
            ]
        );
        Category::create(
            [
                'name' => 'Personal',
                'slug' => 'personal',
            ]
        );
        Post::create(
            [
                'category_id'   => 1,
                'user_id'       => 2,
                'title'         => 'Judul Pertama',
                'slug'          => 'judul-pertama',
                'excerpt'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, nam, ducimus unde dolorum amet, incidunt aspernatur sint fugit quod labore nobis eligendi quaerat iure excepturi repudiandae nulla ipsum quasi sequi.',
                'body'          => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem non porro repellat quam, quod eos quia illum temporibus aliquam totam deserunt autem debitis facere nesciunt quibusdam mollitia nisi. Ipsum id ipsa autem sit velit eaque illum fugit aperiam doloremque esse accusantium, ullam placeat? Illum quas aut sint at, voluptatibus temporibus aspernatur nostrum pariatur quae laudantium optio voluptates, unde sunt accusamus rerum quisquam labore quia. </p><p>Voluptas officia officiis quia. Quos ad aspernatur a voluptate nulla incidunt ipsam maiores architecto doloremque modi? Quia accusamus incidunt est, ea optio reiciendis corporis doloribus architecto obcaecati minus harum dolores provident, ut tenetur ipsa blanditiis in!</p>'

            ]
        );
        Post::create(
            [
                'category_id'   => 2,
                'user_id'       => 1,
                'title'         => 'Judul Ke Dua',
                'slug'          => 'judul-ke-dua',
                'excerpt'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, nam, ducimus unde dolorum amet, incidunt aspernatur sint fugit quod labore nobis eligendi quaerat iure excepturi repudiandae nulla ipsum quasi sequi.',
                'body'          => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem non porro repellat quam, quod eos quia illum temporibus aliquam totam deserunt autem debitis facere nesciunt quibusdam mollitia nisi. Ipsum id ipsa autem sit velit eaque illum fugit aperiam doloremque esse accusantium, ullam placeat? Illum quas aut sint at, voluptatibus temporibus aspernatur nostrum pariatur quae laudantium optio voluptates, unde sunt accusamus rerum quisquam labore quia. </p><p>Voluptas officia officiis quia. Quos ad aspernatur a voluptate nulla incidunt ipsam maiores architecto doloremque modi? Quia accusamus incidunt est, ea optio reiciendis corporis doloribus architecto obcaecati minus harum dolores provident, ut tenetur ipsa blanditiis in!</p>'

            ]
        );
        Post::create(
            [
                'category_id'   => 2,
                'user_id'       => 1,
                'title'         => 'Judul Ke Tiga',
                'slug'          => 'judul-ke-tiga',
                'excerpt'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, nam, ducimus unde dolorum amet, incidunt aspernatur sint fugit quod labore nobis eligendi quaerat iure excepturi repudiandae nulla ipsum quasi sequi.',
                'body'          => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem non porro repellat quam, quod eos quia illum temporibus aliquam totam deserunt autem debitis facere nesciunt quibusdam mollitia nisi. Ipsum id ipsa autem sit velit eaque illum fugit aperiam doloremque esse accusantium, ullam placeat? Illum quas aut sint at, voluptatibus temporibus aspernatur nostrum pariatur quae laudantium optio voluptates, unde sunt accusamus rerum quisquam labore quia. </p><p>Voluptas officia officiis quia. Quos ad aspernatur a voluptate nulla incidunt ipsam maiores architecto doloremque modi? Quia accusamus incidunt est, ea optio reiciendis corporis doloribus architecto obcaecati minus harum dolores provident, ut tenetur ipsa blanditiis in!</p>'

            ]
        );
        Post::create(
            [
                'category_id'   => 3,
                'user_id'       => 2,
                'title'         => 'Judul Ke Empat',
                'slug'          => 'judul-ke-empat',
                'excerpt'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, nam, ducimus unde dolorum amet, incidunt aspernatur sint fugit quod labore nobis eligendi quaerat iure excepturi repudiandae nulla ipsum quasi sequi.',
                'body'          => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem non porro repellat quam, quod eos quia illum temporibus aliquam totam deserunt autem debitis facere nesciunt quibusdam mollitia nisi. Ipsum id ipsa autem sit velit eaque illum fugit aperiam doloremque esse accusantium, ullam placeat? Illum quas aut sint at, voluptatibus temporibus aspernatur nostrum pariatur quae laudantium optio voluptates, unde sunt accusamus rerum quisquam labore quia. </p><p>Voluptas officia officiis quia. Quos ad aspernatur a voluptate nulla incidunt ipsam maiores architecto doloremque modi? Quia accusamus incidunt est, ea optio reiciendis corporis doloribus architecto obcaecati minus harum dolores provident, ut tenetur ipsa blanditiis in!</p>'

            ]
        );
    }
}
