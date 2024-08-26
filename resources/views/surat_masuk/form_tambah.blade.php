@extends('layouts.base')

@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="row">
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Scrollable Modal</h4>
                    </div><!-- end card header -->

                    <div class="card-body">

                        <p class="text-muted">Use<code> modal-dialog-scrollable</code> class to create a
                            modal scrollable.</p>

                        <div>
                            <!-- Scrollable modal -->
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                                data-bs-target="#exampleModalScrollable">Scrollable Modal</button>

                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">
                                                Scrollable
                                                Modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-base">Give your text a good structure</h6>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="text-muted mb-0">Raw denim you probably
                                                        haven't heard of them jean shorts Austin.
                                                        Nesciunt tofu stumptown aliqua, retro synth master
                                                        cleanse.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">Too much or too little
                                                        spacing, as in the example below, can make things
                                                        unpleasant for the reader. The goal is to make your
                                                        text as comfortable to read as possible. </p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">In some designs, you might
                                                        adjust your tracking to create a certain artistic
                                                        effect. It can also help you fix fonts that are
                                                        poorly spaced to begin with.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">For that very reason, I went
                                                        on a quest and spoke to many different professional
                                                        graphic designers and asked them what graphic design
                                                        tips they live.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">You've probably heard that
                                                        opposites attract. The same is true for fonts. Don't
                                                        be afraid to combine font styles that are different
                                                        but complementary, like sans serif with serif, short
                                                        with tall, or decorative with simple. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk
                                                        aliquip jean shorts ullamco ad vinyl cillum PBR.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">For that very reason, I went
                                                        on a quest and spoke to many different professional
                                                        graphic designers and asked them what graphic design
                                                        tips they live.</p>
                                                </div>
                                            </div>
                                            <h6 class="fs-lg my-3">Graphic Design</h6>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">Opposites attract, and that’s
                                                        a fact. It’s in our nature to be interested in the
                                                        unusual, and that’s why using contrasting colors in
                                                        Graphic Design is a must. It’s eye-catching, it
                                                        makes a statement, it’s impressive graphic design.
                                                        Increase or decrease the letter spacing depending.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">Trust fund seitan
                                                        letterpress, keytar raw denim keffiyeh etsy art
                                                        party before they sold out master cleanse
                                                        gluten-free squid scenester freegan cosby sweater.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">Just like in the image where
                                                        we talked about using multiple fonts, you can see
                                                        that the background in this graphic design is
                                                        blurred. Whenever you put text on top of an image,
                                                        it’s important that your viewers can understand.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <i class="ri-checkbox-circle-fill text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ">
                                                    <p class="text-muted mb-0">Keytar raw denim keffiyeh
                                                        etsy art party before they sold out master cleanse
                                                        gluten-free squid scenester freegan cosby sweater.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div><!-- end card-body -->
                    <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                        <h5 class="fs-xs text-muted mb-0">HTML Preview</h5>
                    </div>
                    <div class="card-body">
                        <pre class="language-markup" style="height: 120px;"><code>&lt;!-- Scrollable Modal --&gt;
&lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot;&gt;
...
&lt;/div&gt;</code></pre>
                    </div>
                </div><!-- end card -->
            </div>
    </div>

</div>

@endsection
