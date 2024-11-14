<?php

namespace App\Http\Controllers;

use App\Models\Ekip;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkipController extends Controller
{
    
    public function index()
    {
        $ekipler = Ekip::all();
        return view('admin.icerik-yonetimi.ekip.ekip-liste', compact('ekipler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.ekip.ekip-ekle');
    }

    public function edit($id)
    {
        $ekip = Ekip::findOrFail($id);
        return view('admin.icerik-yonetimi.ekip.ekip-duzenle', compact('ekip'));
    }

    public function store(Request $request)
    {
        try{

            $validated = $request->validate([
                'adsoyad' => 'required|string|max:255',
                'gorev' => 'required|string|max:255',
                'resim' => 'required|image|mimes:jpg,jpeg,png,webp|max:4048',
                'durum' => 'required|numeric|in:0,1',
                'linkedin' => 'nullable|string|max:255',
                'facebook' => 'nullable|string|max:255',
                'twitter' => 'nullable|string|max:255',
                'instagram' => 'nullable|string|max:255',
            ]);

            //Profil Fotoğrafı Ekle
            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/ekip', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }

            Ekip::create([
                'adsoyad' => $validated['adsoyad'],
                'gorev' => $validated['gorev'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'linkedin' => $validated['linkedin'],
                'facebook' => $validated['facebook'],
                'twitter' => $validated['twitter'],
                'instagram' => $validated['instagram']
            ]);

            return redirect()->route('admin.ekip.create')->with('success', 'Ekip Üyesi Başarıyla Eklendi.');


        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $ekip = Ekip::findOrFail($id);
            $validated = $request->validate([
                'adsoyad' => 'required|string|max:255',
                'gorev' => 'required|string|max:255',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4048',
                'durum' => 'required|numeric|in:0,1',
                'linkedin' => 'nullable|string|max:255',
                'facebook' => 'nullable|string|max:255',
                'twitter' => 'nullable|string|max:255',
                'instagram' => 'nullable|string|max:255'
            ]);

            if($request->hasFile('resim'))
            {
                if($ekip->resim)
                {
                    Storage::delete('public/ekip' . $ekip->resim);
                }

                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/ekip', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = $ekip->resim;
            }

            $ekip->update([
                'adsoyad' => $validated['adsoyad'],
                'gorev' => $validated['gorev'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'linkedin' => $validated['linkedin'],
                'facebook' => $validated['facebook'],
                'twitter' => $validated['twitter'],
                'instagram' => $validated['instagram'],
            ]);

            return redirect()->back()->with('success', 'Ekip Üyesi Başarıyla Güncellendi.');


        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $ekip = Ekip::findOrFail($id);
        $ekip->delete();

        return redirect()->route('admin.ekip.index')->with('success', 'Ekip Üyesi Başarıyla Silindi.');
    }
}
