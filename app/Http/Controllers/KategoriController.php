<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/urun/kategori/kategori-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/urun/kategori/kategori-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/urun/kategori/kategori-guncelle');
    }
}
