<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dilListeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin/dil-yonetimi/dil-liste');
    }
}
