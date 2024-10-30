<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SosyalMedyaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin/ayarlar/sosyal-medya');
    }
}
