<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    //Route::middleware('auth:sanctum')Middleware auth:sanctum memastikan bahwa hanya pengguna yang                                                                               sudah diautentikasi menggunakan Laravel Sanctum yang bisa mengakses rute ini.
    //.get('/user', function (Request $request)Mendefinisikan rute HTTP GET ke /user.
    //return $request->user();Mengembalikan data pengguna yang sedang login (terautentikasi).
});
