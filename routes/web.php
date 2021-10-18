<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [HomeController::class, 'posts']);
Route::get('/posts/{post}', [HomeController::class, 'post'])->whereNumber('post')->name('post');
Route::resource('/admin/posts', PostController::class);
//Route::get('/admin/posts', [PostController::class, 'index']);
//Route::get('/admin/posts/create', [PostController::class, 'create']);
//Route::post('/admin/posts', [PostController::class, 'store']);
//Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit']);
//Route::post('/admin/posts/{post}', [PostController::class, 'update']);
//Route::get('/admin/posts/{post}/delete', [PostController::class, 'destroy']);

