<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class detailberitaController extends Controller
{
    public function index()
    {
        $artikel = artikel::all();
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        
        return view('frontend.berita.detail', compact('artikel'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $artikel = Artikel::find($id);


        $kategoriId = $artikel->kategori->id ?? null; // Mengambil ID kategori artikel

        return view('frontend.berita.detail', [
            'artikel' => $artikel,
            'kategoriId' => $kategoriId, // Mengirim ID kategori ke view
        ]);
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
