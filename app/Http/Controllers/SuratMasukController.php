<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('surat.surat_masuk');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form_tambah()
    {
        return view('surat.form_tambah');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request->all());
        // dd('testya');
        if ($request->hasFile('ttd')) {
            $request->file('ttd')->store('ttd', 'public');
        }
        
        $barisData = $request->input('baris');

        if (isset($barisData[1])) {
            // Menampilkan isi dari baris 1 dan sub inputnya
            dd([
                'baris_1' => $barisData[1],  // Isi baris 1
                'sub_input_baris_1' => isset($barisData[1]['sub']) ? $barisData[1]['sub'] : [], // Isi sub-input dari baris 1
            ]);
        } else {
            dd('Baris 1 tidak ditemukan.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('surat.form_tambah');
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
