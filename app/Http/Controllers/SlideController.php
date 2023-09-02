<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slide = Slide::all();
        return view('back.slide.index', ['slide'=>$slide]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_slide' => 'required|min:4',
            'gambar_slide' => 'mimes:png,jpg,jpeg'
        ]);
        if(!empty($request->file('gambar_slide'))){
            $data = $request->all();
            $data['gambar_slide'] = $request->file('gambar_slide')->store('slide');
            Slide::create($data);
            Alert::success('Yeyyy', 'Data Berhasil Disimpan');
            return redirect()->route('slide.index');
        }else{
            $data = $request->all();
            Slide::create($data);
            Alert::success('Yeyyy', 'Data Berhasil Disimpan');
            return redirect()->route('slide.index');
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
        $slide = Slide::find($id);
        return view('back.slide.edit', [
            'slide'=>$slide,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    
    public function update(Request $request, $id)
    {
        // Validate the request data if needed
        
        $slide = Slide::find($id);

        if (!$slide) {
            return redirect()->route('slide.index')->with('error', 'Belum Ada Slide');
        }

        if ($request->hasFile('gambar_artikel')) {
            $gambarSlide = $request->file('gambar_artikel');
            
            // Hapus gambar sebelumnya jika ada
            Storage::delete($slide->gambar_slide);

            $slide->update([
                'judul_slide' => $request->judul_slide,
                'status' => $request->status,
                'gambar_slide' => $gambarSlide->store('slide'),
            ]);
        } else {
            $slide->update([
                'judul_slide' => $request->judul_slide,
                'status' => $request->status,
            ]);
        }
        Alert::info('Yeyyy', 'Slide Berhasil Di Update');
        return redirect()->route('slide.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide = Slide::find($id);

        Storage::delete($slide->gambar_slide);
        $slide -> delete();
        return redirect()->route('slide.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
