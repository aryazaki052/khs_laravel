<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    // public function index()
    // {
    //     $artikel = artikel::all();
    //     $artikel = Artikel::orderBy('created_at', 'desc')->get();
        
    //     return view('frontend.berita.berita', compact('artikel'));
    
    // }
    public function index(Request $request)
    {
        $kategori_id = $request->input('kategori_id'); // Mengambil parameter kategori_id dari URL
    
        $query = Artikel::query();
    
        if ($kategori_id) {
            $query->where('kategori_id', $kategori_id);
        }
    
        $artikel = $query->orderBy('created_at', 'desc')->get();
    
        return view('frontend.berita.berita', [
            'artikel' => $artikel
        ]);
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
