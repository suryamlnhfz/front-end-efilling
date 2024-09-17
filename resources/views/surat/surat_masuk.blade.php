@extends('layouts.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div id="productList">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Surat Masuk <span
                                            class="badge bg-dark-subtle text-dark ms-1">{{ $jmlSuratMasuk }}</span></h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                        <button class="btn btn-subtle-danger d-none" id="remove-actions"
                                            onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        <div>
                                            <!-- Scrollable modal -->
                                            <a href="{{ url('form-tambah') }}" type="button"
                                                class="btn btn-primary mb-2">Tambah data</a>
                                        </div><!-- /.modal -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-centered align-middle table-nowrap mb-0">
                                    <thead class="table-active">
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    Nomor Surat
                                                </div>
                                            </th>
                                            <th class="sort cursor-pointer" data-sort="category">Kategori</th>
                                            <th>Tujuan Surat</th>
                                            <th>Nama Pengirim</th>
                                            <th>Penerima</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($suratMasuk as $surat)
                                            <tr>
                                                <td>{{ $surat->nomor_surat }}</td>
                                                <td class="category">{{ $surat->kategori }}</td>
                                                <td>{{ $surat->tujuan_surat }}</td>
                                                <td>{{ $surat->nama_pengirim }}</td>
                                                <td>{{ $surat->penerima }}</td>
                                                {{-- @php
                                                    dd(route('cetak-surat.cetak_surat', encrypt_id($surat->id)));
                                                @endphp --}}
                                                <td>
                                                    <div class="dropdown position-static">
                                                        <button class="btn btn-subtle-secondary btn-sm btn-icon"
                                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('cetak-surat.cetak_surat', encrypt_id($surat->id)) }}">
                                                                    <i class="bi bi-printer align-middle me-1"></i>
                                                                    Cetak</a></li>


                                                            <a class="dropdown-item edit-item-btn"
                                                                href="{{ route('surat.edit', encrypt_id($surat->id)) }}">
                                                                <i class="ph-pencil align-middle me-1"></i> Ubah
                                                            </a>

                                                            </li>

                                                            <li>
                                                                <button class="dropdown-item remove-item-btn"
                                                                    data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ph-trash align-middle me-1"></i> Hapus
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--end table-responsive-->
                            <!-- Modal -->
                            <div class="modal fade bs-example-modal-center" id="deleteRecordModal" tabindex="-1"
                                role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body text-center p-5">
                                            <i class="bi bi-exclamation-triangle text-warning display-5"></i>
                                            <div class="mt-4">
                                                <h4 class="mb-3">Apakah anda yakin ingin menghapus data?</h4>
                                                <p class="text-muted mb-4">Data yang dihapus tidak dapat dipulihkan lagi,
                                                    klik yakin untuk menghapus data</p>
                                                <div class="hstack gap-2 justify-content-center">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <!-- Link delete with route -->
                                                    <a href="{{ route('surat-masuk.destroy', encrypt_id($surat->id)) }}"
                                                        class="btn btn-danger"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Yakin</a>
                                                    <!-- Form delete -->
                                                    <form id="delete-form"
                                                        action="{{ route('surat-masuk.destroy', encrypt_id($surat->id)) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                            <div class="noresult" style="display: none">
                                <div class="text-center py-4">
                                    <div class="avatar-md mx-auto mb-4">
                                        <div class="avatar-title bg-light text-primary rounded-circle fs-4xl">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ products We did not find
                                        any products for you search.</p>
                                </div>
                            </div>
                            <!-- end noresult -->

                            <div class="row mt-3 align-items-center" id="pagination-element">
                                <div class="col-sm">
                                    <div class="text-muted text-center text-sm-start">
                                        Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">35</span>
                                        Results
                                    </div>
                                </div>

                                <div class="col-sm-auto mt-3 mt-sm-0">
                                    <div class="pagination-wrap hstack gap-2 justify-content-center">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            <i class="mdi mdi-chevron-left align-middle"></i>
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            <i class="mdi mdi-chevron-right align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end pagination-element -->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div>


        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header px-4 pt-4">
                        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>

                    <form class="tablelist-form" novalidate autocomplete="off">
                        <div class="modal-body p-4">
                            <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                            <input type="hidden" id="id-field">

                            <input type="hidden" id="order-field">
                            <input type="hidden" id="rating-field">
                            <input type="hidden" id="discount-field">

                            <div class="mb-3">
                                <label for="product-title-input" class="form-label">Product title</label>
                                <input type="text" id="product-title-input" class="form-control"
                                    placeholder="Enter product title" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Product Images</label>
                                <div class="dropzone my-dropzone border border-1 border-dashed text-center"
                                    style="min-height: 100px;">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="bi bi-cloud-download fs-1"></i>
                                        </div>

                                        <h5 class="fs-md mb-0">Drop files here or click to upload.</h5>
                                    </div>
                                </div>

                                <ul class="list-unstyled mb-0" id="dropzone-preview">
                                    <li class="mt-2" id="dropzone-preview-list">
                                        <!-- This is used as the file preview template -->
                                        <div class="border rounded">
                                            <div class="d-flex flex-wrap gap-2 p-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm bg-light rounded p-2">
                                                        <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                            src="assets/images/new-document.png" alt="Dropzone-Image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="pt-1">
                                                        <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                        <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-3">
                                                    <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="mb-3">
                                <label for="product-category-input" class="form-label">Product category</label>

                                <select class="form-select" id="product-category-input">
                                    <option value="">Select product category</option>
                                    <option value="Appliances">Appliances</option>
                                    <option value="Automotive Accessories">Automotive Accessories</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Grocery">Grocery</option>
                                    <option value="Headphones">Headphones</option>
                                    <option value="Kids">Kids</option>
                                    <option value="Luggage">Luggage</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Watches">Watches</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-stock-input" class="form-label">Stocks</label>
                                        <input type="number" id="product-stock-input" class="form-control"
                                            placeholder="Enter product stocks" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-price-input" class="form-label">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="product-price-input"
                                                placeholder="Enter product price" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                        class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                                <button type="submit" class="btn btn-primary" id="add-btn">Add User</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- modal-content -->
            </div>
            <!-- modal-dialog -->
        </div>
    </div>
    </div>
@endsection
