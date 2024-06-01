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
Route::post('/kategori/store', [KategoriController::class,'store']);
Route::get('/kategori/{id}/edit', [KategoriController::class,'edit']);
Route::put('/kategori/{id}', [KategoriController::class,'update']);
Route::get('/kategori/{id}', [KategoriController::class, 'destroy'] );


Route::get('/buku', function () {
    return view('buku.books');
});
