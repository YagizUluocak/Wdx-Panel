<?php

namespace App\Http\Controllers;

use App\Models\Referans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReferansController extends Controller
{
    public function index()
    {
        $referanslar = Referans::all();
        return view('admin.icerik-yonetimi.referans.referans-liste', compact('referanslar'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.referans.referans-ekle');
    }

    public function edit($id)
    {
        $referans = Referans::findOrFail($id);
        return view('admin.icerik-yonetimi.referans.referans-duzenle', compact('referans'));
    }

    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'resim' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
                'durum' => 'required|numeric|in:0,1',
                'icerik' => 'required',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350'
            ]);
    
            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/referans', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }
    
            Referans::create([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords']
            ]);
    
            return redirect()->route('admin.referans.create')->with('success', 'Referans Başarıyla Eklendi.');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: '. $e->getMessage()]);
        }


       
    }

    public function update(Request $request, $id)
    {
        try{

            $referans = Referans::findOrFail($id);
            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'durum' => 'required|numeric|in:0,1',
                'icerik' => 'required|string',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350',           
            ]);

            if($request->hasFile('resim'))
            {
                if($referans->resim)
                {
                    Storage::delete('public/referans/' . $referans->resim);
                }

                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/referans', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = $referans->resim;
            }

            $referans->update([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords'],
            ]);

            return redirect()->back()->with('success', 'Referans Başarıyla Güncellendi.');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: '.$e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $referans = Referans::findOrFail($id);
        $referans->delete();

        return redirect()->route('admin.referans.index')->with('success', 'Referans Başarıyla Silindi.');
    }
}
