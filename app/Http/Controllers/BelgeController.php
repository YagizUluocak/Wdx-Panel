<?php

namespace App\Http\Controllers;

use App\Models\Belge;
use Illuminate\Http\Request;

class BelgeController extends Controller
{
    public function index()
    {
        $belgeler = Belge::all();

        return view('admin.icerik-yonetimi.belge.belge-liste', compact('belgeler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.belge.belge-ekle');
    }

    public function edit($id)
    {
        $belge = Belge::findOrFail($id);
        return view('admin.icerik-yonetimi.belge.belge-duzenle', compact('belge'));
    }

    public function store(Request $request)
    {
        try {
            // Validasyon
            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'belge' => 'image|mimes:jpeg,png,jpg|max:2048',
                'durum' => 'required|numeric|in:0,1',
            ]);

            // Dosya Yükleme
            if ($request->hasFile('belge')) {
                $fileName = time() . '.' . $request->belge->extension();
                $request->belge->storeAs('public/belge', $fileName);
                $validated['belge'] = $fileName; // Belge ismini validated array'e ekle
            } else {
                $validated['belge'] = null; // Eğer belge yüklenmediyse null ayarla
            }
    
            // Veritabanına kayıt
            Belge::create([            
                'baslik' => $validated['baslik'],
                'belge' => $validated['belge'] ?? null,
                'durum' => $validated['durum']
            ]);
    
            return redirect()->route('belge-ekle')->with('success', 'Belge Başarıyla Eklendi.');
        } catch (\Exception $e) {
            // Hata durumunda geri dön
            return redirect()->back()->withErrors(['error' => 'Bir hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'baslik' => 'required|string|max:255',
            'belge' => 'image|mimes:jpeg,png,jpg|max:2048',
            'durum' => 'required|numeric|in:0,1',
        ]);

        $belge = Belge::findOrFail($id);

        $belge->baslik = $request->input('baslik');

        if($request->hasFile('belge')){
            $belge->belge = $request->file('belge')->store('belgeler');
        }

        $belge->durum = $request->input('durum');
        $belge->save();

        return redirect()->route('admin.belge.index')->with('success', 'Belge başarıyla güncellendi.');
    }
    
    public function destroy($id)
    {
        $belge = Belge::findOrFail($id);
        $belge->delete();
    
        return redirect()->route('admin.belge.index')->with('success', 'Belge başarıyla silindi.');
    }
}
