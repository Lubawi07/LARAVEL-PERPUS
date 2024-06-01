<?php

use App\Http\Controllers\KategoriController;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('register');
});

Route::get('/lupa-password', function () {
    return view('forgot-password');
});

Route::get('/admin', function () {
    return view('layouts.layout');
});


// Route::get('/kategori', function () {
//     return view('kategori.index');
// }
// );

Route::get('/kategori', [KategoriController::class,'index']);
