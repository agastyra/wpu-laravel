<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('blogs', [
            "judul" => "Blogs",
            "blogs" => Blog::all(),
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blog', [
            "judul" => "Single Blog",
            "blogs" => $blog,
        ]);
    }
}
