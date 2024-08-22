@extends('layouts.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-primary text-white rounded fs-xl">
                                            <i class=" bx bxs-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="1000000"></span>
                            </h4>
                            <p class="fw-medium text-muted mb-0">Total Pendapatan</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-warning text-white rounded fs-xl">
                                            <i class="ri-wallet-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="20000"></span>
                            </h4>
                            <p class="fw-medium text-muted mb-0">Pendapatan Perbulan Juli</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-danger text-white rounded fs-xl">
                                            <i class=" bx bx-credit-card-front
"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="1902"></span>
                            </h4>
                            <p class="fw-medium text-muted mb-0">Tunggakan Siswa bulan Juli</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-success text-white rounded fs-xl">
                                            <i class=" bx bxs-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="3174">174</span></h4>
                            <p class="fw-medium text-muted mb-0">Siswa Belum Lunas Bulan Juli</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Grafik Jumlah Tunggakan Siswa
                            </h4>
                        </div>
                        <div class="card-body">
                            <div id="grafik_satu" >
                            </div>
                        </div><!-- end card-body -->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Grafik Total Pendapatan Dan Total Tunggakan
                            </h4>
                        </div>
                        <div class="card-body">
                            <div id="chart_dua"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
            var options = {
          series: [{
            name: "Nominal",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: '',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Agus', 'Sep'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#grafik_satu"), options);
        chart.render();


        var options = {
          series: [
          {
            name: "Total Pendapatan",
            data: [28, 29, 33, 36, 32, 32, 33]
          },
          {
            name: "Total Tunggakan",
            data: [12, 11, 14, 18, 17, 13, 13]
          }
        ],
          chart: {
          height: 350,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: 'Grafik',
          align: 'left'
        },
        grid: {
          borderColor: '#e7e7e7',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul'],
          title: {
            text: 'Bulan'
          }
        },
        yaxis: {
          title: {
            text: 'Nominal'
          },
          min: 5,
          max: 40
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_dua"), options);
        chart.render();
</script>
@endsection
