<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "judul" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "judul" => "About",
        "nama" => "Rangga Agastya",
        "email" => "mochariyanto92@smk.belajar.id",
        "gambar" => "rngga.jpg",
    ]);
});

Route::get('/blogs', [BlogController::class, "index"]);

Route::get('blogs/{blog:slug}', [BlogController::class, "show"]);