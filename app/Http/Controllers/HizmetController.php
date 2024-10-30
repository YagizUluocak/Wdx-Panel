<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HizmetController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/hizmet/hizmet-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/hizmet/hizmet-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/hizmet/hizmet-duzenle');
    }
}
