<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KatalogController extends Controller
{
    public function index()
    {
        $kataloglar = Katalog::all();
        return view('admin.icerik-yonetimi.e-katalog.katalog-liste', compact('kataloglar'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.e-katalog.katalog-ekle');
    }

    public function edit($id)
    {
        $katalog = Katalog::findOrFail($id);
        return view('admin.icerik-yonetimi.e-katalog.katalog-duzenle', compact('katalog'));
    }

    public function store(Request $request)
    {
        try{

            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'resim' => 'required|image|mimes:jpg,jpeg,png,webp|max:4048',
                'dosya' => 'required|mimes:pdf|max:10000',
                'durum' => 'required|numeric|in:0,1'
            ]);

            // Kapak Görseli
            if($request->hasFile('resim'))
            {
                $imageName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/katalog/resim', $imageName);
                $validated['resim'] = $imageName;
            }else{
                $validated['resim'] = null;
            }

            // Pdf Dosya Yükleme
            if($request->hasFile('dosya'))
            {
                $fileName = time() . '.' . $request->dosya->extension();
                $request->dosya->storeAs('public/katalog/dosyalar', $fileName);
                $validated['dosya'] = $fileName;
            }else{
                $validated['dosya'] = null;
            }

            Katalog::create([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'dosya' => $validated['dosya'],
                'durum' => $validated['durum']
            ]);

            return redirect()->route('admin.katalog.create')->with('success', 'Katalog Başarıyla Eklendi.');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $katalog = Katalog::findOrFail($id);

            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4048',
                'dosya' => 'nullable|mimes:pdf|max:10000',
                'durum' => 'required|numeric|in:0,1'
            ]);


            //Kapak Resmi Güncelle
            if($request->hasFile('resim'))
            {
                if($katalog->resim)
                {
                    Storage::delete('public/katalog/resim/' . $katalog->resim);
                }

                $imageName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/katalog/resim', $imageName);
                $validated['resim'] = $imageName;
            }else{
                $validated['resim'] = $katalog->resim;
            }

            // Pdf Dosya Güncelle
            if($request->hasFile('dosya'))
            {
                if($katalog->dosya)
                {
                    Storage::delete('public/katalog/dosyalar' . $katalog->dosya);
                }

                $fileName = time() . '.' . $request->dosya->extension();
                $request->dosya->storeAs('public/katalog/dosyalar', $fileName);
                $validated['dosya'] = $fileName;
            }else{
                $validated['dosya'] = $katalog->dosya;
            }

            $katalog->update([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'dosya' => $validated['dosya'],
                'durum' => $validated['durum']
            ]);

            return redirect()->back()->with('success', 'Katalog Başarıyla Güncellendi.');



        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $katalog = Katalog::findOrFail($id);
        $katalog->delete();

        return redirect()->route('admin.katalog.index')->with('success', 'Katalog Başarıyla Silindi.');
    }
}
