<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = News::all();
        return view ('admin.manajemen-news',compact('berita'));
    }

    public function indexView()
    {
        $berita = News::all();
        return view ('news',compact('berita'));
    }

    public function indexHome()
    {
        $berita = News::all();
        return view ('home',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view ('admin.create-news');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'judul' => 'required|max:255',
        //     'caption' => 'required|max:500',
        //     'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'tanggal' => 'required|numeric',
        // ]);

        // dd($request->all());

        // $file_name = $request->images->getClientOriginalName();
        // $image = $request->images->move('img', $file_name);

        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new News;
        $dtUpload->judul = $request->judul;
        $dtUpload->caption = $request->caption;
        $dtUpload->gambar = $namaFile;
        $dtUpload->tanggal = $request->tanggal;

        $nm->move(public_path().'/images/news/', $namaFile);
        $dtUpload->save();

        // News::create([
        //     'judul' => $request->judul,
        //     'caption' => $request->caption,
        //     'gambar' => $image,
        //     'tanggal' => $request->tanggal,
        // ]);
        
        return redirect ('admin-news');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = News::findOrFail($id);
        return view ('detail-news',compact('berita'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $news = News::findorfail($id);
        return view ('admin.edit-news',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $ingfo = News::find($id);
        // $ingfo->update();
        // return redirect('admin-news');
        // $ingfo->update($request->all());

        // $ubah = News::findorfail($id);
        // $awal = $ubah->gambar;
        // $filename = $awal->getClientOriginalName();
        // $awal->move(public_path().'/images', $filename);

        // $ingfo = [
        //     'judul' => $request['judul'],
        //     'caption' => $request['caption'],
        //     'gambar' => $awal,
        //     'tanggal' => $request['tanggal'],
        // ];
        
        // $ubah->update($ingfo); 


        $news = News::findOrFail($id);
        $gambar = $news->gambar;
        
        $filename = $request->file('gambar')->getClientOriginalName();
        $save = $request->gambar->move(public_path('storage/images/news/'), $filename);
        $gambarPath = '/storage/images/news/' . $filename;
        //$request->image->storeAs('images', $imageName);
          
        
        
        $news->update([
            'judul' => $request['judul'],
            'caption' => $request['caption'],
            'gambar' => $gambarPath,
            'tanggal' => $request['tanggal'],
        ]);
        
        // dd($news);
        // return redirect()->back()->with("OK", "Berhasil mengubah data");





        return redirect('admin-news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ingfo = News::findorfail($id);
        $ingfo->delete();
        return back();
    }
}
