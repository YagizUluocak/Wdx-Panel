<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoruController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/sorular/soru-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/sorular/soru-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/sorular/soru-duzenle');
    }
}
