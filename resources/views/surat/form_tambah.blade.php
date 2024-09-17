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
                                <form action="{{ route('tambah_surat.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nomorSurat" class="form-label">Nomor Surat<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="nomorSurat" class="form-control" id="nomorSurat"
                                            placeholder="" required readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label for="productCategories" class="form-label">Kategori<span
                                                class="text-danger">*</span></label>
                                        <select name="kategori" class="form-control" data-choices id="productCategories">
                                            <option value="Perbaikan">Perbaikan (H)</option>
                                            <option value="Formulir Calas">Formulir Calas (P)</option>
                                            <option value="SK Asisten">SK Asisten (S)</option>
                                            <option value="Sertifikat Webinar">Sertifikat Webinar (SS)</option>
                                            <option value="Sertifikat Asisten">Sertifikat Asisten (SA)</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tujuan_surat" class="form-label">Tujuan Surat<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="tujuan_surat" class="form-control" id="tujuan_surat"
                                            placeholder="" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputdate" class="form-label">Tanggal Terima</label>
                                        <input type="date" name="tanggal_terima" class="form-control"
                                            id="exampleInputdate">
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerima" class="form-label">Penerima<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="penerima" class="form-control" id="penerima"
                                            placeholder="" required>
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
                                                        <i class="bi bi-x-lg"
                                                            style="font-size: 1.25rem; color: gray;"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <button id="addKolomBtn" class="btn btn-primary">Tambah Kolom</button>
                                            <div id="barisContainer" class="mt-3">
                                                <!-- Baris awal -->
                                                <div class="form-group d-flex align-items-center"
                                                    style="margin-top: 10px;">
                                                    <label for="tableInputBaris1" class="form-label">Baris 1 :</label>
                                                    <input name="baris[1][value]" type="text" class="form-control"
                                                        id="tableInputBaris1" placeholder="Masukkan data baris"
                                                        style="flex: 1; margin-left: 10px;">
                                                    <button class="btn btn-link p-0 ms-2"
                                                        onclick="removeField(this, 'baris')">
                                                        <i class="bi bi-x-lg"
                                                            style="font-size: 1.25rem; color: gray;"></i>
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
                                                rows="3"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="penutup" class="form-label">Penutup<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="penutup" class="form-control" id="penutup" placeholder="Must enter minimum of a 100 characters"
                                                rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaTandaTangan" class="form-label">Nama yang bertanda tangan<span
                                                    class="text-danger">*</span></label>
                                            <input name="nama" type="text" class="form-control"
                                                id="namaTandaTangan" placeholder="" required>
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
        let year = '{{ $year }}';
        let month = '{{ $month }}';
        let jmlData = '{{ $jmlData }}';

        document.addEventListener('DOMContentLoaded', function() {
            var nomorSuratInput = document.getElementById('nomorSurat');
            var kategoriSelect = document.getElementById('productCategories');

            // Set default nomor surat berdasarkan kategori default
            setNomorSurat(kategoriSelect.value);

            // Update nomor surat saat kategori diubah
            kategoriSelect.addEventListener('change', function() {
                setNomorSurat(this.value);
            });

            function setNomorSurat(kategori) {  
                switch (kategori) {
                    case 'Perbaikan':
                        nomorSuratInput.value = 'H/UBL/LAB/010/' + jmlData + '/' + month + '/' + year;
                        break;
                    case 'Formulir Calas':
                        nomorSuratInput.value = 'P/UBL/LAB/010/' + jmlData + '/' + month + '/' + year;
                        break;
                    case 'SK Asisten':
                        nomorSuratInput.value = 'S/UBL/LAB/010/' + jmlData + '/' + month + '/' + year;
                        break;
                    case 'Sertifikat Webinar':
                        nomorSuratInput.value = 'SS/UBL/LAB/010/' + jmlData + '/' + month + '/' + year;
                        break;
                    case 'Sertifikat Asisten':
                        nomorSuratInput.value = 'SA/UBL/LAB/010/' + jmlData + '/' + month + '/' + year;
                        break;
                    default:
                        nomorSuratInput.value = '';
                        break;
                }
            }
        });


        document.getElementById('productPage').addEventListener('change', function() {
            var additionalInputs = document.getElementById('additionalInputs');
            additionalInputs.innerHTML = '';

            if (this.value === 'dua') {
                var deskripsiInput = `
            <div class="mb-3">
                <h5>Halaman 2</h5>
            </div>

            <div class="mb-3">
                <label for="shortDecs" class="form-label">Deskripsi<span class="text-danger">*</span></label>
                <textarea name="deskripsi" class="form-control" id="shortDecs" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="penutup" class="form-label">Penutup<span class="text-danger">*</span></label>
                <textarea name="penutup" class="form-control" id="penutup" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
            </div>
        `;
                additionalInputs.innerHTML = deskripsiInput;
            }
        });

        document.getElementById('productTable').addEventListener('change', function() {
            const additionalInput = document.getElementById('additionalInput');
            const barisContainer = document.getElementById('barisContainer');

            if (this.value === 'Ya') {
                additionalInput.style.display = 'block';
                // Hapus semua sub-input yang mungkin ada
                barisContainer.querySelectorAll('.sub-input-container').forEach(container => {
                    container.innerHTML = ''; // Kosongkan sub-input di setiap baris
                });

                // Tambahkan baris awal jika belum ada
                if (!barisContainer.querySelector('.form-group')) {
                    document.getElementById('addBarisBtn').click();
                }
            } else {
                additionalInput.style.display = 'none';
            }
        });

        let kolomCount = 1;
        let barisCount = 1;

        document.getElementById('addKolomBtn').addEventListener('click', function(e) {
            e.preventDefault();
            kolomCount++;
            const kolomContainer = document.getElementById('kolomContainer');
            const newKolom = `
            <div class="form-group" style="display: flex; align-items: center; margin-top: 10px;">
                <label for="tableInputKolom${kolomCount}" class="form-label">Kolom ${kolomCount}:</label>
                <input name="kolom${kolomCount}" type="text" class="form-control" id="tableInputKolom${kolomCount}" placeholder="Masukkan data kolom" style="flex: 1; margin-left: 10px;">
                <button class="btn btn-link p-0" style="margin-left: 10px;" onclick="removeField(this, 'kolom')">
                    <i class="bi bi-x-lg" style="font-size: 1.25rem; color: gray;"></i> <!-- Ikon cross dengan warna abu-abu -->
                </button>
            </div>
    `;
            kolomContainer.insertAdjacentHTML('beforeend', newKolom);
            updateKolomLabels();
        });

        document.getElementById('addBarisBtn').addEventListener('click', function(e) {
            e.preventDefault();
            barisCount++;
            const barisContainer = document.getElementById('barisContainer');
            const newBaris = `
        <div class="form-group d-flex align-items-center mt-3 mb-3">
            <label for="tableInputBaris${barisCount}" class="form-label">Baris ${barisCount}:</label>
            <input name="baris[${barisCount}][value]" type="text" class="form-control" id="tableInputBaris${barisCount}" 
                placeholder="Masukkan data baris" style="flex: 1; margin-left: 10px;">
            <button class="btn btn-link p-0 ms-2" onclick="removeField(this, 'baris')">
                <i class="bi bi-x-lg" style="font-size: 1.25rem; color: gray;"></i>
            </button>
            <button class="btn btn-link p-0 ms-2" onclick="addSubInput(this)">
                <i class="bi bi-plus-lg" style="font-size: 1.25rem; color: gray;"></i>
            </button>
        </div>
        <div class="sub-input-container"></div>
    `;
            barisContainer.insertAdjacentHTML('beforeend', newBaris);
        });


        function addSubInput(button) {
            event.preventDefault();
            const rowContainer = button.closest('.form-group').nextElementSibling;
            const rowIndex = button.closest('.form-group').querySelector('input').name.match(/\d+/)[0];
            const currentCount = rowContainer.querySelectorAll('.sub-input').length + 1;

            const newSubInput = `
        <div class="sub-input form-group d-flex align-items-center mt-2">
            <input name="baris[${rowIndex}][sub][${currentCount}]" type="text" class="form-control" 
                placeholder="Masukkan data sub-input">
            <button class="btn btn-link p-0 ms-2" onclick="removeSubInput(this)">
                <i class="bi bi-x-lg" style="font-size: 1.25rem; color: gray;"></i>
            </button>
        </div>
    `;
            rowContainer.insertAdjacentHTML('beforeend', newSubInput);
        }


        function removeSubInput(button) {
            button.closest('.sub-input').remove();
        }

        function removeField(button, type) {
            const parent = button.closest('.form-group');

            if (type === 'baris') {
                const rowContainer = parent.nextElementSibling;
                if (rowContainer && rowContainer.classList.contains('sub-input-container')) {
                    rowContainer.remove();
                }

                parent.remove();
                updateBarisLabels();
            } else if (type === 'kolom') {
                kolomCount--;
                updateKolomLabels();
            }
        }



        function updateKolomLabels() {
            const kolomLabels = document.querySelectorAll('#kolomContainer .form-group .form-label');
            kolomLabels.forEach((label, index) => {
                label.innerText = `Kolom ${index + 1}:`;
                label.setAttribute('for', `tableInputKolom${index + 1}`);
                label.nextElementSibling.setAttribute('id', `tableInputKolom${index + 1}`);
            });
            kolomCount = kolomLabels.length;
        }

        function updateBarisLabels() {
            const barisLabels = document.querySelectorAll('#barisContainer .form-group .form-label');
            barisLabels.forEach((label, index) => {
                const rowNumber = index + 1; // Mulai dari 1
                label.innerText = `Baris ${rowNumber}:`;
                const inputElement = label.nextElementSibling;
                label.setAttribute('for', `tableInputBaris${rowNumber}`);
                inputElement.setAttribute('id', `tableInputBaris${rowNumber}`);
                inputElement.setAttribute('name', `baris[${rowNumber}][value]`);
            });
            barisCount = barisLabels.length; // Perbarui jumlah baris yang ada
        }
    </script>
@endsection
