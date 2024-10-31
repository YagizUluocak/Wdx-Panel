<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\Urun_Resimleri;
use App\Models\UrunResim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UrunController extends Controller
{
    public function index()
    {
        $urunler = Urun::all();
        return view('admin.icerik-yonetimi.urun.urun-liste', compact('urunler'));
    }

    public function create()
    {
        $kategoriler = Kategori::all();
        return view('admin.icerik-yonetimi.urun.urun-ekle', compact('kategoriler'));
    }

    public function edit($id)
    {
        //Ürün Bul
        $urun = Urun::findOrFail($id);
        //Kategorileri Al (SelectBox için)
        $kategoriler = Kategori::all();
        //Ürün Resimlerini Al
        $urunResimleri = Urun_Resimleri::where('urun_id', $urun->id)->get();

        return view('admin.icerik-yonetimi.urun.urun-duzenle', compact('urun', 'kategoriler', 'urunResimleri'));
    }

    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'urun_kodu' => 'nullable|string|max:255',
                'spot_metni' =>'nullable|string',
                'fiyat' => 'nullable|numeric|min:0',
                'stok' => 'nullable|numeric|in:0,1',
                'icerik' => 'nullable|string',
                'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'urunresim.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'description' => 'nullable|string',
                'keywords' => 'nullable|string',
                'kategori_id' => 'required|exists:kategoris,id',
                'durum' => 'required|numeric|in:0,1',
            ]);

            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/urun/kapak', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }

            // Ürünü kaydetme
            $urun = Urun::create([
                'name' => $validated['name'],
                'urun_kodu' => $validated['urun_kodu'],
                'spot_metni' => $validated['spot_metni'],
                'fiyat' => $validated['fiyat'],
                'stok' => $validated['stok'],
                'icerik' => $validated['icerik'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'keywords' => $validated['keywords'],
                'description' => $validated['description'],
                'kategori_id' => $validated['kategori_id']
            ]);

            // Çoklu resimleri kaydetme
            if ($request->hasFile('urunresim')) {
                foreach ($request->file('urunresim') as $resim) {
                    $resimAdi = uniqid() . '.' . $resim->extension();;
                    $resim->storeAs('public/urun/resimler', $resimAdi);
                    
                    Urun_Resimleri::create([
                        'urun_id' => $urun->id,
                        'resim_adi' => $resimAdi,
                    ]);
                }
            }

            // Başarı mesajı ile yönlendirme
            return redirect()->route('urun-ekle')->with('success', 'Ürün başarıyla eklendi.');
        } catch (\Exception $e) {
            // Hata durumunda geri dön
            return redirect()->back()->withErrors(['error' => 'Bir hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Ürünü bulma
            $urun = Urun::findOrFail($id);
    
            // Validasyon
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'urun_kodu' => 'nullable|string|max:255',
                'spot_metni' => 'nullable|string',
                'fiyat' => 'nullable|numeric|min:0',
                'stok' => 'nullable|numeric|in:0,1',
                'icerik' => 'nullable|string',
                'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'urunresim.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'description' => 'nullable|string',
                'keywords' => 'nullable|string',
                'kategori_id' => 'required|exists:kategoris,id',
                'durum' => 'required|numeric|in:0,1',
            ]);

            if ($request->has('remove_images')) {
                foreach ($request->remove_images as $resimId) {
                    $resim = Urun_Resimleri::findOrFail($resimId);
                    // Dosyayı sil
                    Storage::delete('public/urun/resimler/' . $resim->resim_adi);
                    // Veritabanından sil
                    $resim->delete();
                }
            }
    
            // Kapak resmini güncelleme
            if ($request->hasFile('resim')) {
                // Eski resmi silme (eğer varsa)
                if ($urun->resim) {
                    Storage::delete('public/urun/kapak/' . $urun->resim);
                }
    
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/urun/kapak', $fileName);
                $validated['resim'] = $fileName;
            } else {
                $validated['resim'] = $urun->resim; // Eski resimi koruma
            }
    
            // Ürünü güncelleme
            $urun->update([
                'name' => $validated['name'],
                'urun_kodu' => $validated['urun_kodu'],
                'spot_metni' => $validated['spot_metni'],
                'fiyat' => $validated['fiyat'],
                'stok' => $validated['stok'],
                'icerik' => $validated['icerik'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'keywords' => $validated['keywords'],
                'description' => $validated['description'],
                'kategori_id' => $validated['kategori_id'],
            ]);
    
            // Çoklu resimleri güncelleme
            if ($request->hasFile('urunresim')) {
                foreach ($request->file('urunresim') as $resim) {
                    $resimAdi = uniqid() . '.' . $resim->extension();
                    $resim->storeAs('public/urun/resimler', $resimAdi);
                    
                    Urun_Resimleri::create([
                        'urun_id' => $urun->id,
                        'resim_adi' => $resimAdi,
                    ]);
                }
            }
    
            // Başarı mesajı ile yönlendirme
            return redirect()->route('admin.urun.index')->with('success', 'Ürün başarıyla güncellendi.');
        } catch (\Exception $e) {
            // Hata durumunda geri dön
            return redirect()->back()->withErrors(['error' => 'Bir hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $urun = Urun::findOrFail($id);
        $urun->delete();

        return redirect()->route('admin.urun.index')->with('success', 'Ürün Başarıyla Silindi.');
    }

    public function deleteImage($id)
    {
        try {
            $resim = Urun_Resimleri::findOrFail($id);
            Storage::delete('public/urun/resimler/' . $resim->resim_adi); // Depodaki resmi sil

            $resim->delete(); // Veritabanından resmi sil

            return response()->json(['success' => true, 'message' => 'Resim başarıyla silindi']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Resim silinemedi']);
        }
    }
}
