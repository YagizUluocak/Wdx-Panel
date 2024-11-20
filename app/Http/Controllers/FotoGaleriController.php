<?php

namespace App\Http\Controllers;

use App\Models\FotoGaleri;
use App\Models\Galeri_Resimleri;
use Illuminate\Http\Request;

class FotoGaleriController extends Controller
{
    public function index()
    {
        $fotoGaleri = FotoGaleri::all();
        $galeriResimler = Galeri_Resimleri::where('galeri_id', $fotoGaleri->id)->get();
        return view('admin.icerik-yonetimi.foto-galeri.foto-galeri-liste', compact('fotoGaleri', 'galeriResimler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.foto-galeri.foto-galeri-ekle');
    }

    public function edit($id)
    {
        $fotoGaleri = FotoGaleri::findOrFail($id);
        $galeriResimler = Galeri_Resimleri::where('galeri_id', $fotoGaleri->id)->get();

        return view('admin.icerik-yonetimi.foto-galeri.foto-galeri-duzenle', compact('fotoGaleri', 'galeriResimler'));
    }

    
}
