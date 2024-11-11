<?php

namespace App\Http\Controllers;

use App\Models\Hizmet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HizmetController extends Controller
{
    public function index()
    {
        $hizmetler = Hizmet::all();
        return view('admin.icerik-yonetimi.hizmet.hizmet-liste', compact('hizmetler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.hizmet.hizmet-ekle');
    }

    public function edit($id)
    {
        $hizmet = Hizmet::findOrFail($id);
        return view('admin.icerik-yonetimi.hizmet.hizmet-duzenle', compact('hizmet'));
    }

    public function store(Request $request)
    {
        try{

            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'durum' => 'required|numeric|in:0,1',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'icerik' => 'required|string',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350',
            ]);

            // Resmi Dosyaya Kaydet
            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/hizmet', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }

            $hizmet = Hizmet::create([
                'baslik' => $validated['baslik'],
                'durum' => $validated['durum'],
                'resim' => $validated['resim'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords']
            ]);

            return redirect()->route('admin.hizmet.create')->with('success', 'Hizmet Başarıyla Eklendi.');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $hizmet = Hizmet::findOrFail($id);

            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'durum' => 'required|numeric|in:0,1',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'icerik' => 'required|string',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350',
            ]);

            if($request->hasFile('resim'))
            {
                if($hizmet->resim)
                {
                    Storage::delete('public/hizmet/'. $hizmet->resim);
                }

                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/hizmet', $fileName);
                $validated['resim'] = $fileName;
            }else{

                $validated['resim'] = $hizmet->resim;
            }

            $hizmet->update([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords']
            ]);

            return redirect()->back()->with('success', 'Hizmet Başarıyla Güncellendi.');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: '. $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $hizmet = Hizmet::findOrFail($id);
        $hizmet->delete();

        return redirect()->route('admin.hizmet.index')->with('success', 'Hizmet Başarıyla Silindi.');
    }
}
