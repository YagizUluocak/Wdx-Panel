<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/slider/slider-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/slider/slider-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/slider/slider-duzenle');
    }
}
