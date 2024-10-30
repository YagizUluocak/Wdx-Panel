<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkipController extends Controller
{
    
    public function index()
    {
        return view('admin/icerik-yonetimi/ekip/ekip-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/ekip/ekip-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/ekip/ekip-duzenle');
    }
    
}
