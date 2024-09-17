<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* General Styles */
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 20px;
            margin-left: 5px;
        }

        .container, header {
            margin-bottom: 200px;
        }

        .content-regards {
            margin-top: 50px;
        }

        .main-content {
            margin-top: -12px;
            text-align: justify;
        }

        .second-content {
            margin-top: -15px;
            text-align: justify;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: white;
        }

        .closing {
            text-align: justify;
        }

        .content {
            margin-top: 40px;
        }

        .signature {
            text-align: right;
            margin-top: 50px;
            margin-right: 20px;
        }

        .honour {
            margin-left: 50px;
        }

        .signature .honour {
            margin-right: 50px;
        }

        .sub-jabatan {
            margin-right: 50px;
            margin-top: -10px;
        }

        .univ {
            margin-right: 25px;
            margin-top: -10px;
        }

        .jabatan {
            margin-top: -10px;
        }

        .person {
            margin-top: 100px;
            margin-right: 20px;
        }

        /* Header and Footer Styles for Print */
        @page {
            /* Ukuran 216x330mm */
            margin: 180px 50px;
            /* Sesuaikan margin sesuai kebutuhan */
        }

        #headerImage {
            left: -0;
            top: -0;
            /* Adjust based on your headerImage height */
            right: -10px;
            width: 100%;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="headerImage">
        <img src="{{ asset('assets/images/headersurat.jpeg') }}" alt="Header Image" width="100%" height="150px">
    </div>

    <div class="container">
        <!-- Content -->
        <div class="header">
            <div class="content-context" style="margin-top: 50px;">
                <p>No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: H\UBL\LAB\010\042\07\23</p>
                <p>Hal.&nbsp;&nbsp;&nbsp;&nbsp;: Pemberitahuan Ketersediaan Lab</p>
            </div>

            <div class="content-regards">
                <p>Yth.</p>
                <p>Dekan Fakultas Teknologi Informasi</p>
                <p>Universitas Budi Luhur</p>
                <p>di tempat</p>
            </div>
        </div>

        <div class="content">
            <p>Dengan hormat,</p>
            <p class="second-content">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan akan dimulainya perkuliahan Tahun Ajaran 2023/2024
                Ganjil, saya selaku kepala
                Laboratorium ICT Terpadu ingin menyampaikan terkait ketersediaan Laboratorium yang siap digunakan oleh
                mahasiswa dan dosen untuk mendukung kegiatan perkuliahan. Adapun Laboratorium yang tersedia, antara
                lain:
            </p>
            <table>
                <tr>
                    <th>Lokasi</th>
                    <th>Kapasitas</th>
                    <th>Total</th>
                </tr>
        
                <tr>
                    <td>sasa</td>
                    <td>sasa</td>
                    <td>sasa</td>
                </tr>
            </table>
        </div>

        <div class="closing">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian pemberitahuan ini kami sampaikan, atas perhatian dan
                kerjasama Bapak/Ibu, kami ucapkan terima kasih.</p>
        </div>

        <!-- Signature -->
        <div class="signature">
            <p class="honour">Hormat Kami</p>
            <p class="jabatan">Ka. Subdit. Perpustakaan dan</p>
            <p class="sub-jabatan">Laboratorium</p>
            <p class="univ">Universitas Budi Luhur</p>
            <p class="person">Painem S.Kom M.KOm</p>
        </div>
    </div>
</body>

</html>
