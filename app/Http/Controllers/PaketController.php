<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/paket/paket-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/paket/paket-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/paket/paket-duzenle');
    }
}
