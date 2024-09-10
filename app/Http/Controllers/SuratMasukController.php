<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\TabelContent;
use Carbon\Carbon;
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
        $data = SuratMasuk::count();
        $year = Carbon::now()->format('y');
        $month = Carbon::now()->format('m');

        if ($data > 10) {
            $jmlData = $data;
        } else {
            $jmlData = '0' . $data;
        }
      

        // dd($year);
        return view('surat.form_tambah', compact('year', 'month', 'jmlData'));
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
        // dd($request->all());


        $surat_masuks = [
            'nomor_surat' => $request->nomorSurat,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'penutup' => $request->penutup,
            'nama' => $request->nama,
        ];
        SuratMasuk::create($surat_masuks);
        $baris = $request->baris;

        if (isset($baris[1])) {
            $baris[1] = json_encode($baris[1]);
        }

        $suratMasukId = SuratMasuk::latest('id')->first();
        // dd($suratMasukId->id);

        $table_content = [
            'surat_masuk_id' => $suratMasukId->id,
            'kolom1' => $request->kolom1 ?? 'Tidak ada',
            'kolom2' => $request->kolom2 ?? 'Tidak ada',
            'kolom3' => $request->kolom3 ?? 'Tidak ada',
            'kolom4' => $request->kolom4 ?? 'Tidak ada',
            'kolom5' => $request->kolom5 ?? 'Tidak ada',
            'baris1' => isset($baris[1]) ? json_encode($baris[1]) : 'Tidak ada',
            'baris2' => isset($baris[2]) ? json_encode($baris[2]) : 'Tidak ada',
            'baris3' => isset($baris[3]) ? json_encode($baris[3]) : 'Tidak ada',
            'baris4' => isset($baris[4]) ? json_encode($baris[4]) : 'Tidak ada',
        ];

        // dd($table_content);

        TabelContent::create($table_content);

        return back()->with('success', 'data berhasil ditambahkan');
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
