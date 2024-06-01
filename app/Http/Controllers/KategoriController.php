<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // variabel $kategori akan memanggil model kategori dalam artian jika modelnya belum ada isinya maka akan terjadi eror
        $kategori = \App\Models\Kategori::all();
        // dd ini digunakan untuk mengecek isi dari tabel yang terisi untuk memastikan datanya ada didalam database
        // dd($kategori->all());
        // compact digunakan untuk mengirim data ke tampilan blade
        return view("kategori.index", compact("kategori"));
    }
}
