<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardBlogController;

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

Route::get('/categories', [CategoryController::class, "index"]);

Route::get('/categories/{category:slug}', [CategoryController::class, "show"]);

Route::get('/blogs', [BlogController::class, "index"]);

Route::get('blogs/{blog:slug}', [BlogController::class, "show"]);

Route::get('authors', [AuthorController::class, "index"]);

Route::get('authors/{author:username}', [AuthorController::class, "show"]);

Route::get('/login', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'judul' => 'Dashboard'
    ]);
})->middleware('auth');

Route::resource('/dashboard/blogs', DashboardBlogController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
