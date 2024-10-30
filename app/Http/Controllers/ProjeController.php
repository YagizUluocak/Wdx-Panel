<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjeController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/proje/proje-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/proje/proje-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/proje/proje-duzenle');
    }
}
