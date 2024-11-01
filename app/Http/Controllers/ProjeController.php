<?php

namespace App\Http\Controllers;

use App\Models\Proje;
use App\Models\ProjeResimleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjeController extends Controller
{
    public function index()
    {
        $projeler = Proje::all();
        return view('admin.icerik-yonetimi.proje.proje-liste', compact('projeler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.proje.proje-ekle');
    }

    public function edit($id)
    {
        $proje = Proje::findOrFail($id);
        $projeResimleri = ProjeResimleri::where('proje_id', $proje->id)->get();
        return view('admin.icerik-yonetimi.proje.proje-duzenle', compact('proje', 'projeResimleri'));
    }


    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'resim' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'durum' => 'required|numeric|in:0,1',
                'spot_metni' => 'nullable|string',
                'icerik' => 'nullable|string',
                'description' => 'nullable|string',
                'keywords' => 'nullable|string', 
                'projeresim.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            ]);

            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/proje/kapak', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }

            $proje = Proje::create([
                'name' => $validated['name'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'spot_metni' => $validated['spot_metni'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords']
            ]);

            // Çoklu Resim Kaydetme
            if($request->hasFile('projeresim'))
            {
                foreach($request->file('projeresim') as $resim)
                {
                    $resimAdi = uniqid() . '.' . $resim->extension();
                    $resim->storeAs('public/proje/resimler', $resimAdi);

                    ProjeResimleri::create([
                        'proje_id' => $proje->id,
                        'resim_adi' => $resimAdi,
                    ]);
                }
            }

            return redirect()->route('admin.proje.create')->with('success', 'Proje Başarıyla Eklendi.');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try
        {

            $proje = Proje::findOrFail($id);
            
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'resim' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'durum' => 'required|numeric|in:0,1',
                'spot_metni' => 'nullable|string',
                'icerik' => 'nullable|string',
                'description' => 'nullable|string',
                'keywords' => 'nullable|string', 
                'projeresim.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            ]);
        
            //Kapak Resmi Kayıt
            // Yeni Bir resim Yüklenmişse, eski resmi sil.
            if($request->hasFile('resim')){

                //Yeni Resim Yüklenirse eski resmi sil.
                if($proje->resim){
                    Storage::delete('public/proje/kapak' . $proje->resim);
                }

                // Yeni Resmi kaydet adını al
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/proje/kapak', $fileName);
                $validated['resim'] = $fileName;

            }else{

                $validated['resim'] = $proje->resim;
            }
  
            $proje->update([
                'name' => $validated['name'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'spot_metni' =>$validated['spot_metni'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords'], 
            ]);



            // Çoklu Resimleri Güncelleme
            if($request->hasFile('projeresim'))
            {
                foreach($request->file('projeresim') as $resim){
                    $resimAdi = uniqid() . '.' . $resim->extension();
                    $resim->storeAs('public/proje/resimler', $resimAdi);

                    ProjeResimleri::create([
                        'proje_id' => $proje->id,
                        'resim_adi' => $resimAdi,
                    ]);
                }
            }

            // Çoklu Resim Sil
            if($request->has('remove_images')){
                foreach($request->remove_images as $resimId){
                    $resim = ProjeResimleri::findOrFail($resimId);
                    Storage::delete('public/proje/resimler/' . $resim->resim_adi);

                    $resim->delete();
                }
            }

            return redirect()->back()->with('success', 'Proje Başarıyla Güncellendi.');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $proje = Proje::findOrFail($id);
        $proje->delete();

        return redirect()->route('admin.proje.index')->with('success', 'Proje Başarıyla Silindi.');
    }

    public function deleteImage($id)
    {
        try {
            $resim = ProjeResimleri::findOrFail($id);
            Storage::delete('public/proje/resimler/' . $resim->resim_adi); // Depodaki resmi sil

            $resim->delete(); // Veritabanından resmi sil

            return response()->json(['success' => true, 'message' => 'Resim başarıyla silindi']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Resim silinemedi']);
        }
    }
}
