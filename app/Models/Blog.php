<?php

namespace App\Models;

class Blog
{
    private static $blogPosts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "penulis" => "Rangga Agastya",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti molestiae corporis, natus ab iste ad vitae inventore. Deserunt, accusantium doloremque nemo explicabo tempore unde eveniet illo laborum sed neque minus quos. Unde harum modi architecto tempora expedita explicabo consectetur officia esse repellendus provident qui accusantium ipsum, magni nam neque voluptates cumque assumenda nulla alias eos itaque ab in. Similique sed quos architecto qui, labore officia placeat ad illo numquam eius possimus aperiam excepturi adipisci delectus accusamus beatae? Laboriosam, sequi quidem.",
        ],

        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "penulis" => "Rangga Ariyanto",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti molestiae corporis, natus ab iste ad vitae inventore. Deserunt, accusantium doloremque nemo explicabo tempore unde eveniet illo laborum sed neque minus quos. Unde harum modi architecto tempora expedita explicabo consectetur officia esse repellendus provident qui accusantium ipsum, magni nam neque voluptates cumque assumenda nulla alias eos itaque ab in. Similique sed quos architecto qui, labore officia placeat ad illo numquam eius possimus aperiam excepturi adipisci delectus accusamus beatae? Laboriosam, sequi quidem.laborum sed neque minus quos. Unde harum modi architecto tempora expedita explicabo consectetur officia esse repellendus provident qui accusantium ipsum, magni nam neque voluptates cumque assumenda nulla alias eos itaque ab in. Similique sed quos architecto qui, labore officia placeat ad illo numquam eius possimus aperiam excepturi adipisci delectus accusamus beatae? Laboriosam, sequi quidem",
        ]
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere("slug", $slug);
    }
}
