<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('/categories', [
            "judul" => "Blog Categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('list', [
            "judul" => "Blog Categories | $category->name",
            'blogs' => $category->blogs->load(['author', 'category'])
        ]);
    }
}
