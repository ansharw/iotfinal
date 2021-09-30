<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Suhu dan Kelembaban</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sensor Suhu</h4>
                            <div class="card-header-action">
                                <form class="card-header-form" id="date-picker" action="<?php base_url('suhukelembaban'); ?>" method="POST">
                                    <div class="input-group">
                                        <!-- <input type="text" name="search" id="search" class="form-control" placeholder="Tahun (contoh: 2020)"> -->
                                        <input type="text" class="form-control datepicker" name="dates" id="dates">
                                        <div class="input-group-btn">
                                            <input class="btn btn-primary btn-icon" type="submit" value="Cari" id="cari">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="card-body">
                            <div id="chart1" style="height: 400px;"></div>
                        </div> -->
                        <div class="card-body">
                            <canvas id="myChart1" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Sensor Suhu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Sensor 1</th>
                                            <th>Sensor 2</th>
                                            <th>Sensor 3</th>
                                            <th>Sensor 4</th>
                                            <th>Sensor 5</th>
                                            <th>Sensor 6</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($suhu)) : ?>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($suhu as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['suhu'] ?></td>
                                                <td><?= $row['suhu1'] ?></td>
                                                <td><?= $row['suhu2'] ?></td>
                                                <td><?= $row['suhu3'] ?></td>
                                                <td><?= $row['suhu4'] ?></td>
                                                <td><?= $row['suhuLuar'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sensor Kelembaban</h4>
                        </div>
                        <!-- <div class="card-body" id="chart2" style="height: 400px;">
                        </div> -->
                        <div class="card-body">
                            <canvas id="myChart2" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Sensor Kelembaban</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table2">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Sensor 1</th>
                                            <th>Sensor 2</th>
                                            <th>Sensor 3</th>
                                            <th>Sensor 4</th>
                                            <th>Sensor 5</th>
                                            <th>Sensor 6</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($suhu)) : ?>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($kelembaban as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['kelembaban'] ?></td>
                                                <td><?= $row['kelembaban1'] ?></td>
                                                <td><?= $row['kelembaban2'] ?></td>
                                                <td><?= $row['kelembaban3'] ?></td>
                                                <td><?= $row['kelembaban4'] ?></td>
                                                <td><?= $row['kelembabanLuar'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    // show all data chart

    // setup block  
    // const data = {
    //     datasets: [{
    //         label: 'set point suhu',
    //         data: [
    //             <?php // foreach ($setpointsuhu as $row) : 
                    //                    
                    ?> {
    //                     x: '<?php // echo $row['waktu'] 
                                ?>',
    //                     y: <?php // echo $row['setPointSuhu'] 
                                ?>
    //                 },
    //             <?php // endforeach; 
                    ?>
    //         ],
    //         borderDash: [5, 2],
    //         backgroundColor: 'rgba(0, 0, 0, 0.2)',
    //         borderColor: 'rgba(0, 0, 0, 1)',
    //         borderWidth: 2
    //     }, ]
    // };
    // const onRefresh = (chart, label, data) => {
    //     chart.data.labels.push(label);
    //     chart.data.datasets.forEach(dataset => {
    //         dataset.data.push({data});
    //     });
    // };
    // config block
    // const config = {
    //     type: 'line',
    //     data: data,
    //     options: {
    //         showLines: true,
    //         animation: {
    //             duration: 0
    //         },
    //         scales: {
    //             x: {
    //                 type: 'timeseries',
    //                 time: {
    //                     unit: 'hour'
    //                 }
    //             },
    //             y: {
    //                 title: {
    //                     display: true,
    //                     text: 'Suhu'
    //                 }
    //             }
    //         },
    //         interaction: {
    //             intersect: false
    //         },

    //     }
    // };
    // // render init block
    // const myChart = new Chart(document.getElementById('myChart'), config);

    // getjson with realtime chart ASC / DESC
    // DESC is running and show ticks data from right to left, but ASC is stopped at the lastest array

    let base_url = "<?php echo base_url(); ?>";

    function reloadChart() {
        let labelServer = [];
        let dataS1 = [];
        let dataS2 = [];

        $.getJSON(base_url + "suhukelembaban/ambildata", function(data) {
            $.each(data, function(key, val) {
                labelServer.push(val.waktu);
                dataS1.push(val.suhu);
                dataS2.push(val.suhu1);
            });
            console.log(labelServer);
            console.log(dataS1);
            console.log(dataS2);

            const dataChart = {
                labels: labelServer,
                datasets: [{
                        label: 'Kandang 1',
                        data: dataS1,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.5
                    },
                    {
                        label: 'Kandang 1',
                        data: dataS2,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        // tension: 0.5
                    }
                ]
            };

            let config = {
                type: 'line',
                data: dataChart,
                options: {
                    animation: false,
                    responsive: true,
                }
            };

            if (window.myLine !== undefined) {
                window.myLine.destroy();
            }
            let ctx = document.getElementById("myChart2").getContext("2d");
            window.myLine = new Chart(ctx, config);
        });
    }
    setInterval(function() {
        reloadChart()
    }, 10000);
</script>