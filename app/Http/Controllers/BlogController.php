<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin/icerik-yonetimi/blog/blog-liste');
    }

    public function create()
    {
        return view('admin/icerik-yonetimi/blog/blog-ekle');
    }

    public function update()
    {
        return view('admin/icerik-yonetimi/blog/blog-duzenle');
    }
}
