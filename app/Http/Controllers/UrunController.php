<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/urun/urun-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/urun/urun-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/urun/urun-duzenle');
    }
}
