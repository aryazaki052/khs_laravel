<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class kontakController extends Controller
{
    public $timestamps = false;
    public function index()
    {
        return view('frontend.kontak.kontak');
    }
    public function create()
    {
        return view('frontend.kontak.kontak');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'isi_saran' => 'required'
        ]);

        // Simpan saran ke dalam database
        $saran = new Saran();
        $saran->isi_saran = $request->input('isi_saran');
        $saran->save();
        Alert::success('Terima Kasih', 'Saran Berhasil Dikirim');
        return redirect()->route('frontend.kontak.kontak');
    }
}
