<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = artikel::all();
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
        ]);
        
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);
        $data['user_id'] = Auth::id();
        $data['views'] = 0;
        $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');

        Artikel::create($data);

        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Disimpan']);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
