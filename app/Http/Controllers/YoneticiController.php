<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoneticiController extends Controller
{
    public function index()
    {
        return view('admin/yonetici/yonetici-liste');
    }

    public function create()
    {
        return view('admin/yonetici/yonetici-ekle');
    }

    public function update()
    {
        return view('admin/yonetici/yonetici-duzenle');
    }
}
