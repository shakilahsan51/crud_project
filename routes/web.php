<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::get('/posts/trashed', [PostController::class,  'trashed'])->name('posts.trashed');
Route::get('/posts/{id}/restore', [PostController::class,  'restore'])->name('posts.restore');
Route::delete('/posts/{id}/force_delete', [PostController::class,  'force_delete'])->name('posts.force_delete');

Route::resource('posts', PostController::class);
