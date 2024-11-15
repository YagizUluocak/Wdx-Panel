<?php

namespace App\Http\Controllers;

use App\Models\Sube;
use Exception;
use Illuminate\Http\Request;

class SubeController extends Controller
{
    public function index()
    {
        $subeler = Sube::all();
        return view('admin.icerik-yonetimi.sube.sube-liste', compact('subeler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.sube.sube-ekle');
    }

    public function edit($id)
    {
        $sube = Sube::findOrFail($id);
        return view('admin.icerik-yonetimi.sube.sube-duzenle', compact('sube'));
    }

    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'firma' => 'required|string|max:255',
                'adres' => 'required|string|max:255',
                'telefon' => 'nullable|string|max:255',
                'gsm' => 'nullable|string|max:255',
                'mail' => 'nullable|string|max:255',
                'sehir' => 'nullable|string|max:255',
                'ilce' => 'nullable|string|max:255',
                'durum' => 'required|numeric|in:0,1'
            ]);

            Sube::create([
               'firma' => $validated['firma'],
               'adres' => $validated['adres'],
               'telefon' => $validated['telefon'],
               'gsm' => $validated['gsm'],
               'mail' => $validated['mail'],
               'sehir' => $validated['sehir'],
               'ilce' => $validated['ilce'],
               'durum' => $validated['durum']
            ]);

            return redirect()->route('admin.sube.create')->with('success', 'Şube Başarıyla Eklendi.');

        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $sube = Sube::findOrFail($id);
            $validated = $request->validate([
                'firma' => 'required|string|max:255',
                'adres' => 'required|string|max:255',
                'telefon' => 'nullable|string|max:255',
                'gsm' => 'nullable|string|max:255',
                'mail' => 'nullable|string|max:255',
                'sehir' => 'nullable|string|max:255',
                'ilce' => 'nullable|string|max:255',
                'durum' => 'required|numeric|in:0,1'
            ]);

            $sube->update([
                'firma' => $validated['firma'],
                'adres' => $validated['adres'],
                'telefon' => $validated['telefon'],
                'gsm' => $validated['gsm'],
                'mail' => $validated['mail'],
                'sehir' => $validated['sehir'],
                'ilce' => $validated['ilce'],
                'durum' => $validated['durum']
            ]);

            return redirect()->back()->with('success', 'Şube Başarıyla Güncellendi.');


        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $sube = Sube::findOrFail($id);
        $sube->delete();

        return redirect()->route('admin.sube.index')->with('success', 'Şube Başarıyla Silindi.');
    }
}
