<?php

namespace App\Http\Controllers;

use App\Models\VideoGaleri;
use Exception;
use Illuminate\Http\Request;

class VideoGaleriController extends Controller
{
    public function index()
    {
        $videolar = VideoGaleri::all();
        return view('admin.icerik-yonetimi.video-galeri.video-galeri-liste', compact('videolar'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.video-galeri.video-galeri-ekle');
    }

    public function edit($id)
    {
        $video = VideoGaleri::findOrFail($id);
        return view('admin.icerik-yonetimi.video-galeri.video-galeri-duzenle', compact('video'));
    }

    public function store(Request $request, $id)
    {

        try{
            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'url' => 'required|string|max:350',
                'thumbnail' => 'required|image|mimes:jpg,jpeg,png,webp',
                'durum' => 'required|numeric|in:0,1'
            ]);
    
            if($request->hasFile('thumbnail'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/video', $fileName);
                $validated['thumbnail'] = $fileName;
            }else{
                $validated['thumbnail'] = null;
            }
    
            $video = VideoGaleri::create([
                'baslik' => $validated['baslik'],
                'url' => $validated['url'],
                'thumbnail' => $validated['thumbnail'],
                'durum' => $validated['durum']
            ]);
    
            return redirect()->route('admin.video-galeri.create')->with('success', 'Video Başarıyla Eklendi.');
            
        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
}   }
