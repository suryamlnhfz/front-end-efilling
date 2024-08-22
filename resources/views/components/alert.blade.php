<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session()->get('success'))
    <div id="success" data-success="{{ session()->get('success') }}"></div>
    <script>
        const aktif = document.getElementById('success');
        const dataSuccess = aktif.getAttribute('data-success');
        if (dataSuccess) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: dataSuccess
            });
        }
    </script>
@endif


@if (session()->get('error'))
    <div id="errors" data-error="{{ session()->get('error') }}"></div>
    <script>
        const no_aktif = document.getElementById('errors');
        const dataerror = no_aktif.getAttribute('data-error');
        console.log(dataerror);
        if (dataerror) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: dataerror
            });
        }
    </script>
@endif

@if (Session::has('failed'))
    <div id="faileds" data-failed="{{ Session::has('failed') }}"></div>
    <script>
        const failedt = document.getElementById('faileds');
        const dataerrormain = failedt.getAttribute('data-failed');
        if (dataerrormain) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: dataerrormain
            });
        }
    </script>
@endif