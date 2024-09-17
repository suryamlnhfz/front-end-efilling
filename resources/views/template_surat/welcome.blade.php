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
            margin-top: 0;
            margin-left: 5px;
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
            margin-right: 40px;
        }

        .person {
            margin-top: 100px;
            margin-right: 0px;
        }

        /* Header and Footer Styles for Print */
        @page {
            size: 216mm 330mm;
            /* Ukuran 216x330mm */
            margin: 180px 50px;
            /* Sesuaikan margin sesuai kebutuhan */
        }

        #header {
            position: fixed;
            left: -55px;
            top: -185px;
            /* Adjust based on your header height */
            right: -10px;
            height: 150px;
            width: 115%;
            text-align: center;
        }

        #footer {
            position: fixed;
            left: 0;
            bottom: -200px;
            /* Adjust based on your footer height */
            right: 0;
            height: 150px;
            text-align: center;
        }

        #footer .page:after {}

        .page-break {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <div id="header">
        <img src="{{ public_path('assets/images/headersurat.jpeg') }}" alt="Header Image" width="100%">
    </div>

    <div id="footer">
        <img src="{{ public_path('assets/images/footersurat.jpeg') }}" alt="Footer Image" width="100%">
        <div class="page"></div>
    </div>

    <div class="container">
        <!-- Content -->
        <div class="header">
            <div class="content-context">
                <p>No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->nomor_surat }}</p>
                <p>Hal.&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->tujuan_surat }}</p>
            </div>

            <div class="content-regards">
                <p>Yth.</p>
                <p>{{ $surat->penerima }}</p>
                <p>Universitas Budi Luhur</p>
                <p>di tempat</p>
            </div>
        </div>

        <div class="content">
            <p>Dengan hormat,</p>
            <p class="second-content">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $surat->deskripsi }}
            </p>
            <table>
                <tr>
                    <th>Lokasi</th>
                    <th>Kapasitas</th>
                    <th>Total</th>
                </tr>
                <!-- Table rows omitted for brevity -->
                <tr>
                    <td>sasa</td>
                    <td>sasa</td>
                    <td>sasa</td>
                </tr>
                <tr>
                    <td>sasa</td>
                    <td>sasa</td>
                    <td>sasa</td>
                </tr>
            </table>
        </div>

        <div class="closing">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $surat->penutup }}</p>
        </div>

        <!-- Signature -->
        <div class="signature">
            <table style="width: 40%; margin-left: 440px; text-align: center; border: none; margin-top: 100px;">
                <tr>
                    <td style="text-align: center; border:none;">Hormat Kami</td>
                </tr>
                <tr>
                    <td style="text-align: center;border:none;">Kepala Lab ICT</td>
                </tr>
                <tr>
                    <td style="text-align: center;border:none;">DKKA Universitas Budi Luhur</td>
                </tr>
                <tr>
                    <td style="padding-top: 100px; text-align: center;border:none;">Achmad Syarif S.KOm m.KOm</td>
                </tr>
            </table>
        </div>
        
    </div>
</body>

</html>
