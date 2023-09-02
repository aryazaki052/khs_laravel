<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class prokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proker = Proker::all();
        return view('back.proker.index', ['proker'=>$proker]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.proker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_proker' => 'required|min:4',
            'gambar_proker' => 'mimes:png,jpg,jpeg'
        ]);
        if(!empty($request->file('gambar_proker'))){
            $data = $request->all();
            $data['gambar_proker'] = $request->file('gambar_proker')->store('proker');
            Proker::create($data);
            Alert::success('Yeyyy', 'Data Berhasil Disimpan');
            return redirect()->route('proker.index');
        }else{
            $data = $request->all();
            Proker::create($data);
            Alert::success('Yeyyy', 'Data Berhasil Disimpan');
            return redirect()->route('proker.index');
        };
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
        $proker = Proker::find($id);
        return view('back.proker.edit', [
            'proker'=>$proker,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proker = Proker::find($id);

        if (!$proker) {
            return redirect()->route('proker.index')->with('error', 'Belum Ada Pengurus');
        }

        if ($request->hasFile('gambar_proker')) {
            $gambar_proker = $request->file('gambar_proker');
            
            // Hapus gambar sebelumnya jika ada
            Storage::delete($proker->gambar_proker);

            $proker->Update([
                'nama_proker' => $request->nama_proker,
                'keterangan' => $request->keterangan_proker,
                'gambar_proker' => $gambar_proker->store('proker'),
            ]);
        } else {
            $proker->update([
                'nama_proker' => $request->nama_proker,
                'keterangan' => $request->keterangan_proker,
            ]);
        }
        Alert::info('Yeyyy', 'Slide Berhasil Di Update');
        return redirect()->route('proker.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $proker = Proker::find($id);

        Storage::delete($proker->gambar_proker);
        $proker -> delete();
        return redirect()->route('proker.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
