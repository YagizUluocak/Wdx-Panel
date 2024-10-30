<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoGaleriController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/foto-galeri/foto-galeri-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/foto-galeri/foto-galeri-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/foto-galeri/foto-galeri-duzenle');
    }
}
