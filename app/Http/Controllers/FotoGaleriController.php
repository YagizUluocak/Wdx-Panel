<?php

namespace App\Http\Controllers;

use App\Models\FotoGaleri;
use App\Models\Galeri_Resimleri;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request, $id)
    {
        try{
            $fotoGaleri = FotoGaleri::findOrFail($id);

            $validated = $request->validate([
                'baslik' => 'nullable|string|max:255',
                'durum' => 'required|numeric|in:0,1',
                'resimler.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4048',
            ]);
    
            if($request->has('remove_images'))
            {
                foreach($request->remove_images as $resim_id)
                {
                    $resim = Galeri_Resimleri::findOrFail($resim_id);
                    Storage::delete('public/foto-galeri' . $resim->resim_adi);
    
                    $resim->delete();
                }
            }
    
            $fotoGaleri->update([
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
                        'galeri_id' => $fotoGaleri->id,
                        'resim_adi' => $resimAdi
                    ]);
                }
            }
    
            return redirect()->route('admin.foto-galeri.index')->with('success', 'Galeri Başarıyla Güncellendi.');
        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir hata oluştu: ' . $e->getMessage()]);
        }
      
    }

    public function destroy($id)
    {
        $fotoGaleri = FotoGaleri::findOrFail($id);
        $fotoGaleri->delete();

        return redirect()->route('admin.foto-galeri.index')->with('success', 'Galeri Başarıyla Silindi.');
    }

    public function deleteImage($id)
    {
        try{
            $resim = Galeri_Resimleri::findOrFail($id);
            Storage::delete('public/foto-galeri' . $resim->resim_adi);
            $resim->delete();
        }catch(Exception $e){
            return response()->json(['success' => false, 'message' => 'Resim silinemedi']);
        }
    }
}
