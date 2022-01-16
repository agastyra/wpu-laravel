<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors', [
            'judul' => "Authors",
            'authors' => User::all()
        ]);
    }

    public function show(User $author)
    {
        return view('list', [
            'judul' => $author->name,
            'blogs' => $author->blogs->load(['author', 'category'])
        ]);
    }
}
