@extends('layouts.base')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Surat</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-4">
                                <h5 class="card-title mb-3">Perhatian</h5>
                                <p class="text-muted">Jika anda ingin membuat surat dengan 2 halaman atau lebih maka pilih
                                    page sebanyak 3</p>
                            </div>
                            <div class="col-xxl-8">
                                <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="nomorSurat" class="form-label">Nomor Surat<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="nomorSurat" class="form-control" id="nomorSurat"
                                            placeholder="" value="{{ $surat->nomor_surat }}" required readonly>
                                    </div>
                                    {{-- {{ dd(explode('/', $surat->nomor_surat)[0]) }} --}}

                                    {{-- Ini bisa dijadiin dinamis kalo emang kedepannya akan ada kode baru --}}
                                    <div class="mb-3">
                                        <label for="productCategories" class="form-label">Kategori<span
                                                class="text-danger">*</span></label>
                                        <select name="kategori" class="form-control" id="productCategories">
                                            <option value="P" {{ explode('/', $surat->nomor_surat)[0] == 'H' ? 'selected' : '' }}>Perbaikan
                                                (H)</option>
                                            <option value="F" {{ explode('/', $surat->nomor_surat)[0] == 'P' ? 'selected' : '' }}>Formulir
                                                Calas (P)</option>
                                            <option value="SK" {{ explode('/', $surat->nomor_surat)[0] == 'SK' ? 'selected' : '' }}>SK
                                                Asisten (S)</option>
                                            <option value="SS" {{ explode('/', $surat->nomor_surat)[0] == 'SS'  ? 'selected' : '' }}>
                                                Sertifikat Webinar (SS)</option>
                                            <option value="SA" {{ explode('/', $surat->nomor_surat)[0] == 'SA' ? 'selected' : '' }}>
                                                Sertifikat Asisten (SA)</option>
                                        </select>
                                    </div>



                                    <div class="mb-3">
                                        <label for="productPage" class="form-label">Ingin menambahkan lampiran ?<span
                                                class="text-danger">*</span></label>
                                        <select name="page" class="form-control" data-choices name="productPage"
                                            id="productPage">
                                            <option value="satu">Tidak</option>
                                            <option value="dua">Ya</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="productTable" class="form-label">Ingin menambahkan tabel ?<span
                                                class="text-danger">*</span></label>
                                        <select name="tabel" class="form-control" id="productTable" style="width: 50%">
                                            <option value="Tidak">Tidak</option>
                                            <option value="Ya">Ya</option>
                                        </select>
                                    </div>

                                    <div id="additionalInput" class="additional-input mb-2">
                                        <!-- Flexbox container -->
                                        <div
                                            style="display: flex; flex-wrap: wrap; gap: 1rem; align-items: flex-start; flex-direction: column;">
                                            <div id="kolomContainer">
                                                <div class="form-group d-flex align-items-center">
                                                    <label for="tableInputKolom1" class="form-label">Kolom 1:</label>
                                                    <input name="kolom1" type="text" class="form-control"
                                                        id="tableInputKolom1" placeholder="Masukkan data kolom"
                                                        style="flex: 1; margin-left: 10px;">
                                                    <button class="btn btn-link p-0 ms-2"
                                                        onclick="removeField(this, 'kolom')">
                                                        <i class="bi bi-x-lg" style="font-size: 1.25rem; color: gray;"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <button id="addKolomBtn" class="btn btn-primary">Tambah Kolom</button>
                                            <div id="barisContainer" class="mt-3">
                                                <!-- Baris awal -->
                                                <div class="form-group d-flex align-items-center" style="margin-top: 10px;">
                                                    <label for="tableInputBaris1" class="form-label">Baris 1 :</label>
                                                    <input name="baris[1][value]" type="text" class="form-control"
                                                        id="tableInputBaris1" placeholder="Masukkan data baris"
                                                        style="flex: 1; margin-left: 10px;">
                                                    <button class="btn btn-link p-0 ms-2"
                                                        onclick="removeField(this, 'baris')">
                                                        <i class="bi bi-x-lg" style="font-size: 1.25rem; color: gray;"></i>
                                                    </button>
                                                    <button class="btn btn-link p-0 ms-2" onclick="addSubInput(this)">
                                                        <i class="bi bi-plus-lg"
                                                            style="font-size: 1.25rem; color: gray;"></i>
                                                    </button>
                                                </div>
                                                <div class="sub-input-container">
                                                    <div class="sub-input form-group d-flex align-items-center mt-2">
                                                        <input name="baris[1][sub][1]" type="text"
                                                            class="form-control" placeholder="Masukkan data sub-input"
                                                            style="flex: 1; margin-left: 10px;">
                                                        <button class="btn btn-link p-0 ms-2"
                                                            onclick="removeSubInput(this)">
                                                            <i class="bi bi-x-lg"
                                                                style="font-size: 1.25rem; color: gray;"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <button id="addBarisBtn" class="btn btn-secondary mt-2">Tambah Baris</button>
                                        </div>
                                    </div>


                                    <div id="additionalInputs"></div>
                                    <div class="mb-3">
                                        <h5>Halaman 1</h5>
                                    </div>

                                    <div class="container" style="display: flex; flex-direction: column; gap: 1rem;">
                                        <div class="mb-3">
                                            <label for="shortDecs" class="form-label">Deskripsi<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="deskripsi" class="form-control" id="shortDecs" placeholder="Must enter minimum of a 100 characters"
                                                rows="3">{{ old('deskripsi', $surat->deskripsi) }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="penutup" class="form-label">Penutup<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="penutup" class="form-control" id="penutup" placeholder="Must enter minimum of a 100 characters"
                                                rows="3">{{ old('penutup', $surat->penutup) }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaTandaTangan" class="form-label">Nama yang bertanda tangan<span
                                                    class="text-danger">*</span></label>
                                            <input name="nama" type="text" class="form-control"
                                                id="namaTandaTangan" placeholder="" value="{{ $surat->nama_pengirim }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="hstack gap-2 justify-content-end mb-3">
                                        <a href="{{ route('surat-masuk.index') }}" class="btn btn-danger"><i
                                                class="ph-x align-middle"></i>
                                            Cancel</a>
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryDropdown = document.getElementById('productCategories');
            const nomorSuratInput = document.getElementById('nomorSurat');

            // Simpan nomor surat asli yang diambil dari database
            let originalNomorSurat = "{{ $surat->nomor_surat }}";

            // Function to update the nomor surat based on selected category
            function updateNomorSurat() {
                const selectedCategory = categoryDropdown.value;
                // Perbarui nomor surat hanya jika kategori diubah
                if (selectedCategory) {
                    nomorSuratInput.value = `${selectedCategory}/UBL/LAB/${originalNomorSurat.substring(4)}`;
                }
            }

            // Hanya jalankan saat kategori berubah
            categoryDropdown.addEventListener('change', updateNomorSurat);
        });
    </script>
@endsection
