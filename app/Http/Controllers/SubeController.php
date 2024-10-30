<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubeController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/sube/sube-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/sube/sube-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/sube/sube-duzenle');
    }
}
