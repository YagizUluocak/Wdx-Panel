<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayfaController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/sayfa/sayfa-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/sayfa/sayfa-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/sayfa/sayfa-duzenle');
    }
}
