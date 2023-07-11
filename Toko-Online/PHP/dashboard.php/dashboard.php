<?php
include 'dashboard_query.php';
?>

<div class="row">
    <h4>DASHBOARD</h4>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            JUMLAH PELANGGAN</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_customer; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            JUMLAH PRODUK</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_produk; ?></div>
                    </div>
                    <div class="col-auto">

                        <i class="fas fa fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            JUMLAH TRANSAKSI</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo 'Rp ' . number_format($jumlah_transaksi['total_transaksi'], 2, ",", "."); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa fa-money fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>



</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_produk; ?>],
            datasets: [{
                label: 'Data Transaksi ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                fill: false,
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            title: {
                display: true,
                text: "TOTAL SELURUH PENJUALAN"
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>