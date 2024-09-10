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
                                            class="badge bg-dark-subtle text-dark ms-1">254</span></h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                        <button class="btn btn-subtle-danger d-none" id="remove-actions"
                                            onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        <div>
                                            <!-- Scrollable modal -->
                                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalScrollable">Tambah data</button>
                                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampcleModalScrollableTitle">
                                                                Silahkan Masukan Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    <div>
                                                                        <label for="formFile" class="form-label">Masukan
                                                                            File atau Foto</label>
                                                                        <input class="form-control" type="file"
                                                                            id="formFile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    <div>
                                                                        <label for="formFile"
                                                                            class="form-label">Perihal</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    <div>
                                                                        <label for="formFile" class="form-label">Masa
                                                                            Aktif</label>
                                                                        <input type="date" class="form-control"
                                                                            id="exampleInputdate">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="button" class="btn btn-primary">Simpan
                                                                Simpan</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
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
                                                    Nomor
                                                </div>
                                            </th>
                                            <th class="sort cursor-pointer" data-sort="category">Perihal</th>
                                            <th class="sort cursor-pointer" data-sort="stock">Masa Aktif</th>
                                            <th class="sort cursor-pointer" data-sort="price">Pengirim</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            {{-- <td class="products">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs bg-light rounded p-1 me-2">
                                                        <img src="assets/images/products/32/img-1.png" alt=""
                                                            class="img-fluid d-block">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">
                                                            <a href="apps-ecommerce-product-details.html"
                                                                class="text-reset products">Branded T-Shirts</a>
                                                        </h6>
                                                        Pembudidayaan Ikan Lele
                                                    </div>
                                                </div>
                                            </td> --}}
                                            <td>Pembudidayaan Ikan Lele</td>
                                            <td class="category">3 Tahun</td>
                                            <td class="stock">Isabella</td>
                                            <td>
                                                <div class="dropdown position-static">
                                                    <button class="btn btn-subtle-secondary btn-sm btn-icon" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item"
                                                                href="apps-ecommerce-product-details.html"><i
                                                                    class="ph-eye align-middle me-1"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn" data-bs-toggle="modal"
                                                                href="#showModal"><i
                                                                    class="ph-pencil align-middle me-1"></i> Edit</a>
                                                        </li>
                                                        <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal"
                                                                href="#deleteRecordModal"><i
                                                                    class="ph-trash align-middle me-1"></i> Remove</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--end table-responsive-->

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
