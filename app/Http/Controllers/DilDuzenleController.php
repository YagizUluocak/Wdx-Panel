<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class DilDuzenleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){       
        return view('admin/dil-yonetimi/dil-duzenle');
    }
}
