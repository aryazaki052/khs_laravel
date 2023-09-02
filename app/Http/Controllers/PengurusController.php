<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('back.pengurus.index', ['pengurus'=>$pengurus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pengurus' => 'required|min:4',
            'gambar_pengurus' => 'mimes:png,jpg,jpeg'
        ]);
        if(!empty($request->file('gambar_pengurus'))){
            $data = $request->all();
            $data['gambar_pengurus'] = $request->file('gambar_pengurus')->store('pengurus');
            Pengurus::create($data);
            Alert::success('Yeyyy', 'Data Berhasil Disimpan');
            return redirect()->route('pengurus.index');
        }else{
            $data = $request->all();
            Pengurus::create($data);
            Alert::success('Yeyyy', 'Data Berhasil Disimpan');
            return redirect()->route('pengurus.index');
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
        $pengurus = Pengurus::find($id);
        return view('back.pengurus.edit', [
            'pengurus'=>$pengurus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengurus = Pengurus::find($id);

        if (!$pengurus) {
            return redirect()->route('pengurus.index')->with('error', 'Belum Ada Pengurus');
        }

        if ($request->hasFile('gambar_pengurus')) {
            $gambarpengurus = $request->file('gambar_pengurus');
            
            // Hapus gambar sebelumnya jika ada
            Storage::delete($pengurus->gambar_pengurus);

            $pengurus->update([
                'nama_pengurus' => $request->nama_pengurus,
                'jabatan' => $request->jabatan,
                'gambar_pengurus' => $gambarpengurus->store('pengurus'),
            ]);
        } else {
            $pengurus->update([
                'nama_pengurus' => $request->nama_pengurus,
                'jabatan' => $request->jabatan,
            ]);
        }
        Alert::info('Yeyyy', 'Slide Berhasil Di Update');
        return redirect()->route('pengurus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengurus = Pengurus::find($id);

        Storage::delete($pengurus->gambar_pengurus);
        $pengurus -> delete();
        return redirect()->route('pengurus.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
