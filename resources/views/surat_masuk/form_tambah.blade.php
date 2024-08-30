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
                                        <label for="productTitle" class="form-label">Nomor Surat<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="productTitle" placeholder=""
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="productCategories" class="form-label">Kategori<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" data-choices name="productCategories"
                                            id="productCategories">
                                            <option value="">Perbaikan (H)</option>
                                            <option value="Appliances">Formulir Calas (P)</option>
                                            <option value="Automotive Accessories">SK Asisten (S)</option>
                                            <option value="Electronics">Sertifikat Webinar (SS)</option>
                                            <option value="Fashion">Sertifikat Asisten (SA)</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="shortDecs" class="form-label">Deskripsi<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="shortDecs" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="shortDecs" class="form-label">Penutup<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="shortDecs" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Tanda Tangan Digital</label>
                                        <input class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productTitle" class="form-label">Nama yang bertanda tangan<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="productTitle" placeholder=""
                                            required>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="productBrand" class="form-label">Brand <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="productBrand"
                                                    placeholder="Enter brand" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="productUnit" class="form-label">Unit <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" data-choices name="productUnit"
                                                    id="productUnit">
                                                    <option value="">Select Unit</option>
                                                    <option value="Kilogram">Kilogram</option>
                                                    <option value="Pieces">Pieces</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="hstack gap-2 justify-content-end mb-3">
                            <a href="{{ url('/') }}" class="btn btn-danger"><i class="ph-x align-middle"></i> Cancel</a>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="main-content">
        </div>
    </div>
@endsection
