<div class="container-fluid">
    <div id="two-column-menu">
    </div>
    <ul class="navbar-nav" id="navbar-nav">


        <li class="nav-item">
            <a href="{{ route('/.index') }}" class="nav-link menu-link @if (request()->is('/')) active @endif">
                <i class="ph-gauge"></i> <span data-key="t-calendar">Dashboard</span> </a>
        </li>
    </ul>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Surat Online</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('penyimpanan') }}" class="nav-link menu-link @if (request()->is('penyimpanan')) active @endif" data-key="t-analytics">
                                    Arsip
                                </a>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('surat-masuk.index') }}" class="nav-link menu-link @if (request()->is('surat-masuk.index')) active @endif" data-key="t-analytics">
                                    Surat
                                </a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ph-user-circle"></i> <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-signin.html" class="nav-link" role="button" data-key="t-signin">
                                    Sign In </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signup.html" class="nav-link" role="button" data-key="t-signup">
                                    Sign Up </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-reset.html" class="nav-link" role="button"
                                    data-key="t-password-reset">
                                    Password Reset
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-change.html" class="nav-link" role="button"
                                    data-key="t-password-create">
                                    Password Create
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-lockscreen.html" class="nav-link" role="button"
                                    data-key="t-lock-screen">
                                    Lock Screen
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-logout.html" class="nav-link" role="button" data-key="t-logout">
                                    Logout </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-success-msg.html" class="nav-link" role="button"
                                    data-key="t-success-message"> Success Message </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-twostep.html" class="nav-link" role="button"
                                    data-key="t-two-step-verification"> Two Step Verification </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404.html" class="nav-link" data-key="t-404-error"> 404
                                                Error </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-503.html" class="nav-link" data-key="t-503"> 503 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline.html" class="nav-link" data-key="t-offline-page">
                                                Offline Page </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

{{-- Modal add product --}}
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-4 pt-4">
                <h5 class="modal-title" id="exampleModalLabel">Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
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
                        <input type="text" id="product-title-input" class="form-control" placeholder="Enter product title" required >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Images</label>
                        <div class="dropzone my-dropzone border border-1 border-dashed text-center" style="min-height: 100px;">
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
                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/new-document.png" alt="Dropzone-Image" >
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
                        <!-- end dropzon-preview -->
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
                                <input type="number" id="product-stock-input" class="form-control" placeholder="Enter product stocks" required >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="product-price-input" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" id="product-price-input" placeholder="Enter product price" required >
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
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
