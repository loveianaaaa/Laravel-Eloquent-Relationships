<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    //Route::get('/', function () { ... }); Mendefinisikan rute HTTP GET untuk halaman utama (/).                                                      return view('welcome');Mengembalikan tampilan (Blade template) bernama welcome, yang berarti Laravel akan mencari file
});

/**
 * @path /users
 * @method GET
 */
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
//Route::get('/users', ...)Menentukan rute HTTP GET untuk path /users.
//\App\Http\Controllers\UserController::class, 'index'Laravel akan mencari                                                                     UserController di dalam direktori app/Http/Controllers/.
/**
 * @path /posts
 * @method GET
 */
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);