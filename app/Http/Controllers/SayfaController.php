<?php

namespace App\Http\Controllers;

use App\Models\Sayfa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SayfaController extends Controller
{
    public function index()
    {
        $sayfalar = Sayfa::all();
        return view('admin.icerik-yonetimi.sayfa.sayfa-liste', compact('sayfalar'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.sayfa.sayfa-ekle');
    }

    public function edit($id)
    {
        $sayfa = Sayfa::findOrFail($id);
        return view('admin.icerik-yonetimi.sayfa.sayfa-duzenle', compact('sayfa'));
    }

    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'durum' => 'required|numeric|in:0,1',
                'resim' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
                'icerik' => 'required|string',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350'
            ]);

            // Resim Dosya Kaydetme
            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/sayfa', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }

            $sayfa = Sayfa::create([
                'baslik' => $validated['baslik'],
                'durum' => $validated['durum'],
                'resim' => $validated['resim'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords']
            ]);

            return redirect()->route('admin.sayfa.create')->with('success', 'Sayfa Başarıyla Eklendi.');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {

        try{
            $sayfa = Sayfa::findOrFail($id);

            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'durum' => 'required|numeric|in:0,1',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'icerik' => 'required|string',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350'
            ]);

            if($request->hasFile('resim'))
            {
                if($sayfa->resim)
                {
                    Storage::delete('public/sayfa/' . $sayfa->resim);
                }

                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/sayfa',$fileName);
                $validated['resim'] = $validated['resim'];
            }else{
                $validated['resim'] = $sayfa->resim;
            }

            $sayfa->update([
                'baslik' => $validated['baslik'],
                'durum' => $validated['durum'],
                'resim' => $validated['resim'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords'],
            ]);

            return redirect()->back()->with('success', 'Sayfa Başarıyla Güncellendi.');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['eror', 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $sayfa = Sayfa::findOrFail($id);
        $sayfa->delete();

        return redirect()->route('admin.sayfa.index')->with('success', 'Sayfa Başarıyla Silindi.');
    }
}
