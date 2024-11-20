<?php

namespace App\Http\Controllers;

use App\Models\FotoGaleri;
use App\Models\Galeri_Resimleri;
use Exception;
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

    public function store(Request $request)
    {
        try{

            $validated = $request->validate([
                'baslik' => 'nullable|string|max:255',
                'durum' => 'required|numeric|in:0,1',
                'resimler.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4048',
            ]);

            $galeri = FotoGaleri::create([
                'baslik' => $validated['baslik'],
                'durum' => $validated['durum']
            ]);

            if($request->hasFile('resimler'))
            {
                foreach($request->file('resimler') as $resim)
                {
                    $resimAdi = uniqid() . '.' . $resim->extension();
                    $resim->storeAs('public/foto-galeri', $resimAdi);

                    Galeri_Resimleri::create([
                        'galeri_id' => $galeri->id,
                        'resim_adi' => $resimAdi
                    ]);
                }
            }

            return redirect()->route('admin.foto-galeri.create')->with('success', 'Galeri Başarıyla Eklendi..');



        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }
}
