<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\TabelContent;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratMasuk = SuratMasuk::all();
        $jmlSuratMasuk = SuratMasuk::count();
        return view('surat.surat_masuk', compact('suratMasuk', 'jmlSuratMasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function cetak_surat(String $id)
    {
        // Misalnya data surat diambil dari model Surat berdasarkan ID
        $id = decrypt_id($id);
        $surat = SuratMasuk::findOrFail($id);
        
        // Mengirim data ke view
        $pdf = FacadePdf::loadView('template_surat.welcome', ['surat' => $surat]);
        $pdf->setPaper('legal', 'portrait');
        return $pdf->stream('surat.pdf');
    }

    public function form_tambah()

    {
        $data = SuratMasuk::count();
        $year = Carbon::now()->format('y');
        $month = Carbon::now()->format('m');

        if ($data > 10) {
            $jmlData = $data + 1;
        } else {
            $jmlData = '0' . $data + 1;
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
            'flag' => 0,
            'penerima' => $request->penerima,
            'tanggal_terima' => $request->tanggal_terima,
            'tujuan_surat' => $request->tujuan_surat,
            'nomor_surat' => $request->nomorSurat,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'penutup' => $request->penutup,
            'nama_pengirim' => $request->nama,
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

        return redirect()->route('surat-masuk.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt_id($id);
        $surat = SuratMasuk::findOrFail($id);
        return view('surat.detail_surat_masuk', compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd('sa');

        $id = decrypt_id($id);
        $surat = SuratMasuk::findOrFail($id);
        // dd($surat);
        return view('surat.edit', compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nomorSurat' => 'required|string|max:255',
            'kategori' => 'required|string|max:10',
            'deskripsi' => 'required|string',
            'penutup' => 'required|string',
            'nama' => 'required|string|max:255',
            'baris.*.value' => 'nullable|string',
            'baris.*.sub.*' => 'nullable|string',
        ]);

        $surat = SuratMasuk::findOrFail($id);
        switch ($validatedData['kategori']) {
            case 'F':

                $surat->nomor_surat = $validatedData['nomorSurat'];
                $surat->kategori = 'Formulir Calas';
                break;

            case 'P':

                $surat->nomor_surat = $validatedData['nomorSurat'];
                $surat->kategori = 'Perbaikan';
                break;

            case 'SK':

                $surat->nomor_surat = $validatedData['nomorSurat'];
                $surat->kategori = 'SK Asisten';
                break;

            case 'SS':

                $surat->nomor_surat = $validatedData['nomorSurat'];
                $surat->kategori = 'Sertifikat Webinar';
                break;

            case 'SA':

                $surat->nomor_surat = $validatedData['nomorSurat'];
                $surat->kategori = 'Sertifikat Asisten';
                break;

            default:

                return redirect()->back()->withErrors(['kategori' => 'Kategori tidak valid.']);
        }


        $surat->deskripsi = $validatedData['deskripsi'];
        $surat->penutup = $validatedData['penutup'];
        $surat->nama_pengirim = $validatedData['nama'];
        $surat->save();


        $validatedData = $request->validate([
            'kolom1' => 'nullable|string',
            'kolom2' => 'nullable|string',
            'kolom3' => 'nullable|string',
            'kolom4' => 'nullable|string',
            'kolom5' => 'nullable|string',
            'baris.*' => 'nullable|array',
        ]);


        $tableContent = TabelContent::findOrFail($id);

        $tableContent->kolom1 = $validatedData['kolom1'] ?? 'Tidak ada';
        $tableContent->kolom2 = $validatedData['kolom2'] ?? 'Tidak ada';
        $tableContent->kolom3 = $validatedData['kolom3'] ?? 'Tidak ada';
        $tableContent->kolom4 = $validatedData['kolom4'] ?? 'Tidak ada';
        $tableContent->kolom5 = $validatedData['kolom5'] ?? 'Tidak ada';


        $baris = $validatedData['baris'] ?? [];
        $tableContent->baris1 = isset($baris[1]) ? json_encode($baris[1]) : 'Tidak ada';
        $tableContent->baris2 = isset($baris[2]) ? json_encode($baris[2]) : 'Tidak ada';
        $tableContent->baris3 = isset($baris[3]) ? json_encode($baris[3]) : 'Tidak ada';
        $tableContent->baris4 = isset($baris[4]) ? json_encode($baris[4]) : 'Tidak ada';

        $tableContent->save();


        // Redirect ke halaman surat masuk atau halaman sukses lainnya
        return redirect()->route('surat-masuk.index')->with('success', 'Surat berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $decryptedId = decrypt_id($id);

        $surat = SuratMasuk::findOrFail($decryptedId);
        $surat->delete();

        return redirect()->route('surat-masuk.index')->with('success', 'Data berhasil dihapus');
    }
}
