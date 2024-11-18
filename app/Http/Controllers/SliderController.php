<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliderler = Slider::all();
        return view('admin.icerik-yonetimi.slider.slider-liste', compact('sliderler'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.slider.slider-ekle');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.icerik-yonetimi.slider.slider-duzenle', compact('slider'));
    }

    public function store(Request $request)
    {
        try{

            $validated = $request->validate([
                'baslik' => 'required|string',
                'resim' => 'required|image|mimes:jpg,jpeg,png,webp|max:4048',
                'description' => 'nullable|string|max:350',
                'durum' => 'required|numeric|in:0,1'
            ]);

            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/slider', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }

            Slider::create([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'description' => $validated['description'],
                'durum' => $validated['durum']
            ]);

            return redirect()->route('admin.slider.create')->with('success', 'Slider Başarıyla Eklendi.');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $slider = Slider::findOrFail($id);
            $validated = $request->validate([
                'baslik' => 'required|string',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4048',
                'description' => 'nullable|string|max:350',
                'durum' => 'required|numeric|in:0,1'
            ]);

            if($request->hasFile('resim'))
            {
                if($slider->resim)
                {
                    Storage::delete('public/slider', $slider->resim);
                }

                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/slider', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = $slider->resim;
            }

            $slider->update([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'description' => $validated['description'],
                'durum' => $validated['durum']
            ]);

            return redirect()->back()->with('success', 'Slider Başarıyla Eklendi.');



        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Slider Başarıyla Silindi.');
    }
}
