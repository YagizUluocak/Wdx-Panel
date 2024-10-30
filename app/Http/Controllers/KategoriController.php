<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoriler = Kategori::all();
        return view('admin.icerik-yonetimi.urun.kategori.kategori-liste', compact('kategoriler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.urun.kategori.kategori-ekle');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('admin.icerik-yonetimi.urun.kategori.kategori-guncelle', compact('kategori'));
    }

    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'durum' => 'required|numeric|in:0,1',
            ]);

            Kategori::create([
                'name' => $validated['name'],
                'durum' => $validated['durum']
            ]);

            return redirect()->route('kategori-ekle')->with('success', 'Kategori Başarıyla Eklendi Yönlendiriliyor...');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'durum' => 'required|numeric|in:0,1',
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->name = $request->input('name');
        $kategori->durum = $request->input('durum');
        $kategori->save();

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori Başarıyla Güncellendi.');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori Başarıyla Silindi.');
    }
}
