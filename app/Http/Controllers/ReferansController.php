<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferansController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/referans/referans-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/referans/referans-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/referans/referans-duzenle');
    }
}
