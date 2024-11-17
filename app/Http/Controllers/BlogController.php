<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $bloglar = Blog::all();
        return view('admin.icerik-yonetimi.blog.blog-liste', compact('bloglar'));
    }

    public function create()
    {
        return view('admin.icerik-yonetimi.blog.blog-ekle');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.icerik-yonetimi.blog.blog-duzenle', compact('blog'));
    }

    public function store(Request $request)
    {

        try{
            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'resim' => 'required|image|mimes:jpg,jpeg,png,webp|max:4048',
                'durum' => 'required|numeric|in:0,1',
                'icerik' => 'required|string',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350'
            ]);

            if($request->hasFile('resim'))
            {
                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/blog', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = null;
            }

            Blog::create([
                'baslik' => $validated['baslik'],
                'resim' => $validated['resim'],
                'durum' => $validated['durum'],
                'icerik' => $validated['icerik'],
                'description' => $validated['description'],
                'keywords' => $validated['keywords']
            ]);

            return redirect()->route('admin.blog.create')->with('success', 'Blog Başarıyla Eklendi.');

        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $blog = Blog::findOrFail($id);
            $validated = $request->validate([
                'baslik' => 'required|string|max:255',
                'resim' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4048',
                'durum' => 'required|numeric|in:0,1',
                'icerik' => 'required|string',
                'description' => 'required|string|max:350',
                'keywords' => 'required|string|max:350'
            ]);

            if($request->hasFile('resim'))
            {
                if($blog->resim)
                {
                    Storage::delete('public/blog', $blog->resim);
                }

                $fileName = time() . '.' . $request->resim->extension();
                $request->resim->storeAs('public/blog', $fileName);
                $validated['resim'] = $fileName;
            }else{
                $validated['resim'] = $blog->resim;
            }

            $blog->update([
               'baslik' => $validated['baslik'],
               'resim' =>$validated['resim'],
               'durum' => $validated['durum'],
               'icerik' => $validated['icerik'],
               'description' => $validated['description'],
               'keywords' => $validated['keywords']
            ]);

            return redirect()->back()->with('success', 'Blog Güncelleme İşlemi Başarıyla Gerçekleşti.');

        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => 'Bir Hata Oluştu: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog Başarıyla Silindi.');
    }
}
