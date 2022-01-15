<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
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
            "name" => "Rangga Agastya",
            "email" => "rangga@gmail.com",
            "password" => bcrypt("12345")
        ]);

        User::create([
            "name" => "Rangga Ariyanto",
            "email" => "ariyanto@gmail.com",
            "password" => bcrypt("12345")
        ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Blog::create([
            "title" => "Judul Pertama",
            "category_id" => 1,
            "user_id" => 1,
            "slug" => "judul-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, reiciendis!",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quibusdam dignissimos tempore soluta omnis velit illum numquam. Doloremque sit velit saepe! Fuga modi, minima porro omnis sequi harum sunt accusamus quibusdam fugit vero esse! Enim, maxime cupiditate? Aspernatur odio, rerum, cupiditate odit sit blanditiis consequuntur cumque tempore optio doloremque ut perferendis libero"
        ]);

        Blog::create([
            "title" => "Judul Kedua",
            "category_id" => 1,
            "user_id" => 1,
            "slug" => "judul-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, reiciendis!",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quibusdam dignissimos tempore soluta omnis velit illum numquam. Doloremque sit velit saepe! Fuga modi, minima porro omnis sequi harum sunt accusamus quibusdam fugit vero esse! Enim, maxime cupiditate? Aspernatur odio, rerum, cupiditate odit sit blanditiis consequuntur cumque tempore optio doloremque ut perferendis libero"
        ]);

        Blog::create([
            "title" => "Judul Ketiga",
            "category_id" => 2,
            "user_id" => 2,
            "slug" => "judul-ketiga",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, reiciendis!",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quibusdam dignissimos tempore soluta omnis velit illum numquam. Doloremque sit velit saepe! Fuga modi, minima porro omnis sequi harum sunt accusamus quibusdam fugit vero esse! Enim, maxime cupiditate? Aspernatur odio, rerum, cupiditate odit sit blanditiis consequuntur cumque tempore optio doloremque ut perferendis libero"
        ]);
    }
}
