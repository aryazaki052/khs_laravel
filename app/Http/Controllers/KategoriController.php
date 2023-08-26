<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('back.kategori.index', compact('kategori'));
        // return('hello world');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.kategori.create_kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:4',
        ]);
        
        $kategori = Kategori::create([
            'nama_kategori' => $request -> nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $kategori = Kategori::find($id);
        return view('back.kategori.edit_kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);
        $kategori = Kategori::findorFail($id);
        $kategori->Update($data);

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Terupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::find($id);
        $kategori -> delete();
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus']);

    }
}
