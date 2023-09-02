<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori_id = $request->input('kategori_id'); // Mengambil parameter kategori_id dari URL
    
        $query = Artikel::query();
    
        if ($kategori_id) {
            $query->where('kategori_id', $kategori_id);
        }
    
        $artikel = $query->get();
    
        return view('back.artikel.index', [
            'artikel' => $artikel
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('back.artikel.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:4',
            'kategori_id' => 'required',
        ]);
    
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['user_id'] = Auth::id();
        $data['views'] = 0;
    
        if ($request->kategori_id == 2) {
            $data['file_dokumen'] = $request->file('dokumen')->store('dokumen'); // Jika kategori adalah "Pengumuman"
        } else {
            $data['file_dokumen'] = ''; // Jika kategori bukan "Pengumuman"
        }
    
        $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');
    
        Artikel::create($data);
        Alert::success('Yeyyy', 'Data Berhasil Disimpan');
        return redirect()->route('artikel.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();
        return view('back.artikel.edit_artikel', [
            'artikel'=>$artikel,
            'kategori'=>$kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_artikel'))){
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul'=> $request->judul,
                'body'=> $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_id'=> $request->kategori_id,
                'is_active'=> $request->is_active,
                'user_id' => Auth::id()
            ]);
            Alert::info('Yeyyy', 'Data Berhasil Di Update');
            return redirect()->route('artikel.index'); 
        }else{
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul'=> $request->judul,
                Storage::delete($artikel->gambar_artikel),
                'body'=> $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_id'=> $request->kategori_id,
                'is_active'=> $request->is_active,
                'user_id' => Auth::id(),
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel')
            ]);
            Alert::info('Yeyyy', 'Data Berhasil Di Update');

            return redirect()->route('artikel.index');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::find($id);

        Storage::delete($artikel->gambar_artikel);
        $artikel -> delete();
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
