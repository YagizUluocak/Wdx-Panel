<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/e-katalog/katalog-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/e-katalog/katalog-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/e-katalog/katalog-duzenle');
    }
}
