<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoGaleriController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/video-galeri/video-galeri-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/video-galeri/video-galeri-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/video-galeri/video-galeri-duzenle');
    }
}
