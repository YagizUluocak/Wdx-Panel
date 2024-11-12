<?php

namespace App\Http\Controllers;

use App\Models\Sorular;
use Illuminate\Http\Request;

class SoruController extends Controller
{
    public function index()
    {
        $sorular = Sorular::all();
        return view('admin.icerik-yonetimi.sorular.soru-liste', compact('sorular'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.sorular.soru-ekle');
    }

    public function edit($id)
    {
        $soru = Sorular::findOrFail($id);
        return view('admin.icerik-yonetimi.sorular.soru-duzenle', compact('soru'));
    }

    public function store(Request $request)
    {
        try{

            $validated = $request->validate([
                'baslik' => 'required|string|max:300',
                'durum' => 'required|numeric|in:0,1',
                'icerik' => 'required|string'
            ]);

            Sorular::create([
                'baslik' => $validated['baslik'],
                'durum' => $validated['durum'],
                'icerik' => $validated['icerik']
            ]);

            return redirect()->route('admin.soru.create')->with('success', 'Soru Başarıyla Eklendi.');
  
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $soru = Sorular::findOrFail($id);

            $validated = $request->validate([
                'baslik' => 'required|string|max:300',
                'durum' => 'required|numeric|in:0,1',
                'icerik' => 'required|string'
            ]);

            $soru->update([
                'baslik' => $validated['baslik'],
                'durum' => $validated['durum'],
                'icerik' => $validated['icerik']
            ]);

            return redirect()->back()->with('success', 'Soru Güncelleme İşlemi Başarıyla Gerçekleşti.');


        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $soru = Sorular::findOrFail($id);
        $soru->delete();
        return redirect()->route('admin.soru.index')->with('success', 'Soru Başarıyla Silindi.');
    }
}
