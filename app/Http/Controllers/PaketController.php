<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $paketler = Paket::all();
        return view('admin.icerik-yonetimi.paket.paket-liste', compact('paketler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.paket.paket-ekle');
    }

    public function edit($id)
    {
        $paket = Paket::findOrFail($id);
        return view('admin.icerik-yonetimi.paket.paket-duzenle', compact('paket'));
    }



    public function store(Request $request)
    {

        try{

            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'fiyat' => 'required|numeric',
                'periyod' => 'required|numeric|in:0,1,2,3',
                'durum' => 'required|numeric|in:0,1',
                'spot_metni' => 'required|string',
                'icerik' => 'required|string',
            ]);
            
            $paket = Paket::create([
                'baslik' => $validated['baslik'],
                'fiyat' => $validated['fiyat'],
                'periyod' => $validated['periyod'],
                'durum' => $validated['durum'],
                'spot_metni' => $validated['spot_metni'],
                'icerik' => $validated['icerik']
            ]);
        
            return redirect()->route('admin.paket.create')->with('success', 'Paket Başarıyla Eklendi.');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $paket = Paket::findOrFail($id);

            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'fiyat' => 'required|numeric',
                'periyod' => 'required|numeric|in:0,1,2,3',
                'durum' => 'required|numeric|in:0,1',
                'spot_metni' => 'required|string',
                'icerik' => 'required|string',
            ]);

            $paket->update([
               'baslik' => $request['baslik'],
               'fiyat' => $request['fiyat'],
               'periyod' => $request['periyod'],
               'durum' => $request['durum'],
               'spot_metni' => $request['spot_metni'],
               'icerik' => $request['icerik']
            ]);
    
            return redirect()->back()->with('success', 'Proje Başarıyla Güncellendi.');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: '. $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $paket = Paket::findOrFail($id);
        $paket->delete();

        return redirect()->route('admin.paket.index')->with('success', 'Paket Başarıyla Silindi.');
    }
}
