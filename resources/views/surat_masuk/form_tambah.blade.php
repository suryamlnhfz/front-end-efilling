@extends('layouts.base')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Tambah Surat</h4>

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
                                <form action="#!">
                                    <div class="mb-3">
                                        <label for="nomorSurat" class="form-label">Nomor Surat<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="nomorSurat" class="form-control" id="nomorSurat" placeholder="" required disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="productCategories" class="form-label">Kategori<span
                                                class="text-danger">*</span></label>
                                        <select name="kategori" class="form-control" data-choices name="productCategories"
                                            id="productCategories">
                                            <option value="perbaikan">Perbaikan (H)</option>
                                            <option value="formulir_calas">Formulir Calas (P)</option>
                                            <option value="sk_asisten">SK Asisten (S)</option>
                                            <option value="sertifikat_webinar">Sertifikat Webinar (SS)</option>
                                            <option value="sertifikat_asisten">Sertifikat Asisten (SA)</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="shortDecs" class="form-label">Deskripsi<span
                                                class="text-danger">*</span></label>
                                        <textarea name="deskripsi" class="form-control" id="shortDecs" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="penutup" class="form-label">Penutup<span
                                                class="text-danger">*</span></label>
                                        <textarea name="penutup" class="form-control" id="penutup" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Tanda Tangan Digital</label>
                                        <input name="ttd" class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaTandaTangan" class="form-label">Nama yang bertanda tangan<span
                                                class="text-danger">*</span></label>
                                        <input name="nama" type="text" class="form-control" id="namaTandaTangan" placeholder=""
                                            required>
                                    </div>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="hstack gap-2 justify-content-end mb-3">
                            <a href="{{ url('/') }}" class="btn btn-danger"><i class="ph-x align-middle"></i>
                                Cancel</a>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="main-content">
        </div>
    </div>
    <script>
        document.getElementById('productCategories').addEventListener('change', function() {
            var nomorSuratInput = document.getElementById('nomorSurat');

            switch (this.value) {
                case 'perbaikan':
                    nomorSuratInput.value = 'H/UBL/LAB/010/62/07/24';
                    break;
                case 'formulir_calas':
                    nomorSuratInput.value = 'P/UBL/LAB/010/62/07/24';
                    break;
                case 'sk_asisten':
                    nomorSuratInput.value = 'S/UBL/LAB/010/044/07/24';
                    break;
                case 'sertifikat_webinar':
                    nomorSuratInput.value = 'SS/UBL/LAB/010/62/07/24';
                    break;
                case 'sertifikat_asisten':
                    nomorSuratInput.value = 'SA/UBL/LAB/010/62/07/24';
                    break;
                default:
                    nomorSuratInput.value = '';
                    break;
            }
        });
    </script>
@endsection
