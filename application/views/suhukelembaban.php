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
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Letak sensor suhu</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">Berikut adalah letak sensor suhu (DHT22) pada kandang ayam tertutup (closed house) yang ditunjukkan pada bentuk kotak merah berlabel S dan urutan sensornya (example: S1)</div>
                            <div class="chocolat-parent">
                                <a href="<?php echo base_url(); ?>assets/image/kandangsuhu.png" class="chocolat-image" title="Letak Sensor Suhu">
                                    <div>
                                        <img alt="image" src="<?php echo base_url(); ?>assets/image/kandangsuhu.png" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Letak sensor kelembaban</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">Berikut adalah letak sensor kelembaban (DHT22) pada kandang ayam tertutup (closed house) yang ditunjukkan pada bentuk kotak merah berlabel S dan urutan sensornya (example: K1)</div>
                            <div class="chocolat-parent">
                                <a href="<?php echo base_url(); ?>assets/image/kandangkelembaban.png" class="chocolat-image" title="Letak Sensor Kelembaban">
                                    <div>
                                        <img alt="image" src="<?php echo base_url(); ?>assets/image/kandangkelembaban.png" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="section-title mt-0">Set Point Suhu dan Kelembaban Selama 14 Hari</div>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <?php for ($i = 1; $i <= 14; $i++) : ?>
                                            <th scope="col">Hari <?php echo $i; ?></th>
                                        <?php endfor; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php for ($j = 1; $j <= 14; ++$j) : ?>
                                            <?php $y = 33;
                                            while ($j <= 14) : ?>
                                                <?php $j++; ?>
                                                <td>
                                                    <b><?php echo $y -= 0.5 ?> &degC<br>
                                                        60-70 %</b>
                                                </td>
                                            <?php endwhile; ?>
                                        <?php endfor; ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Sensor Suhu</h4>
                            <div class="card-header-action" style="text-align: right;">
                                Data Terakhir Masuk: <b><?= date("d M Y") ?></b><br>
                                <b>Keterangan</b> : <b>p.m</b> = 12.00 Siang - 12.00 Malam, <b>a.m</b> = 12.00 Malam - 12.00 Siang
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="clear">Tunggu sebentar <span id="time">01:00</span></div>
                            <canvas id="myChart1" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Sensor Suhu (Dalam satuan Celcius)</h4>
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
                            <div class="card-header-action" style="text-align: right;">
                                Data Terakhir Masuk: <b><?= date("d M Y") ?></b><br>
                                <b>Keterangan</b> : <b>p.m</b> = 12.00 Siang - 12.00 Malam, <b>a.m</b> = 12.00 Malam - 12.00 Siang
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="clear">Tunggu sebentar <span id="time2">01:00</span></div>
                            <canvas id="myChart2" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Sensor Kelembaban (Dalam satuan %)</h4>
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
                                        <?php if (empty($kelembaban)) : ?>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- 
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

    // function reloadChart() {
    //     let labelServer = [];
    //     let dataS1 = [];
    //     let dataS2 = [];

    //     $.getJSON(base_url + "suhukelembaban/ambildata", function(data) {
    //         $.each(data, function(key, val) {
    //             labelServer.push(val.waktu);
    //             dataS1.push(val.suhu);
    //             dataS2.push(val.suhu1);
    //         });
    //         const dataChart = {
    //             labels: labelServer,
    //             datasets: [{
    //                     label: 'Kandang 1',
    //                     data: dataS1,
    //                     fill: false,
    //                     borderColor: 'rgb(75, 192, 192)',
    //                     tension: 0.5
    //                 },
    //                 {
    //                     label: 'Kandang 1',
    //                     data: dataS2,
    //                     fill: false,
    //                     borderColor: 'rgb(75, 192, 192)',
    //                     // tension: 0.5
    //                 }
    //             ]
    //         };

    //         let config = {
    //             type: 'line',
    //             data: dataChart,
    //             options: {
    //                 animation: false,
    //                 responsive: true,
    //             }
    //         };

    //         if (window.myLine !== undefined) {
    //             window.myLine.destroy();
    //         }
    //         let ctx = document.getElementById("myChart2").getContext("2d");
    //         window.myLine = new Chart(ctx, config);
    //     });
    // }
    // setInterval(function() {
    //     reloadChart()
    // }, 10000);

    // function reloadChart3() {
    //     // let label = [];
    //     // let dataS1 = [];
    //     // let dataS2 = [];
    //     // let dataS3 = [];
    //     // let dataS4 = [];
    //     // let dataS5 = [];
    //     // let dataS6 = [];
    //     // let dataSetPoint = [];

    //     // $.getJSON(base_url + "suhukelembaban/ambildata", function(data) {
    //     //     $.each(data, function(key, val) {
    //     //         label.unshift(val.waktu);
    //     //         dataS1.unshift(val.suhu);
    //     //         dataS2.unshift(val.suhu1);
    //     //         dataS3.unshift(val.suhu2);
    //     //         dataS4.unshift(val.suhu3);
    //     //         dataS5.unshift(val.suhu4);
    //     //         dataS6.unshift(val.suhuLuar);
    //     //         dataSetPoint.unshift(val.setPointSuhu)
    //     //     });
    //         const dataChart = {
    //             // labels: label,
    //             datasets: [{
    //                     label: 'Suhu 1',
    //                     data: [],
    //                     backgroundColor: 'rgba(255, 99, 132, 0.2)',
    //                     borderColor: 'rgba(255, 99, 132, 1)',
    //                     tension: 0.2
    //                 },
    //                 {
    //                     label: 'Suhu 2',
    //                     data: [],
    //                     backgroundColor: 'rgba(125, 109, 12, 0.2)',
    //                     borderColor: 'rgba(125, 109, 12, 1)',
    //                     tension: 0.2
    //                 },
    //                 {
    //                     label: 'Suhu 3',
    //                     data: [],
    //                     backgroundColor: 'rgba(207, 0, 15, 0.2)',
    //                     borderColor: 'rgba(207, 0, 15, 1)',
    //                     tension: 0.2
    //                 },
    //                 {
    //                     label: 'Suhu 4',
    //                     data: [],
    //                     backgroundColor: 'rgba(34, 167, 240, 0.2)',
    //                     borderColor: 'rgba(34, 167, 240, 1)',
    //                     tension: 0.2
    //                 },
    //                 {
    //                     label: 'Suhu 5',
    //                     data: [],
    //                     backgroundColor: 'rgba(42, 187, 155, 0.2)',
    //                     borderColor: 'rgba(42, 187, 155, 1)',
    //                     tension: 0.2
    //                 },
    //                 {
    //                     label: 'Suhu Luar',
    //                     data: [],
    //                     backgroundColor: 'rgba(247, 202, 24, 0.2)',
    //                     borderColor: 'rgba(247, 202, 24, 1)',
    //                     tension: 0.2
    //                 },
    //                 {
    //                     label: 'Set Point Suhu',
    //                     data: [],
    //                     backgroundColor: 'rgba(0, 0, 0, 0.2)',
    //                     borderColor: 'rgba(0, 0, 0, 1)',
    //                     borderDash: [5, 2],
    //                     tension: 0.2
    //                 }
    //             ]
    //         };

    //         let config3 = {
    //             type: 'line',
    //             data: dataChart,
    //             options: {
    //                 // animation: false,
    //                 // responsive: true,
    //                 // plugins: {
    //                 //     legend: {
    //                 //         position: 'top',
    //                 //     },
    //                 // },
    //                 scales: {
    //                     x: {
    //                         type: 'realtime',
    //                         realtime: {
    //                             delay: 3000,
    //                             onRefresh: chart => {
    //                                 chart.data.datasets[0].forEach(dataset => {
    //                                     dataset.data.push({
    //                                         x: Date.now(),
    //                                         y: Math.random() * 3
    //                                     });
    //                                 });
    //                                 chart.data.datasets[1].forEach(dataset => {
    //                                     dataset.data.push({
    //                                         x: Date.now(),
    //                                         y: Math.random() * 2
    //                                     });
    //                                 }); 
    //                                 chart.data.datasets[2].forEach(dataset => {
    //                                     dataset.data.push({
    //                                         x: Date.now(),
    //                                         y: Math.random() * 4
    //                                     });
    //                                 }); 
    //                                 chart.data.datasets[3].forEach(dataset => {
    //                                     dataset.data.push({
    //                                         x: Date.now(),
    //                                         y: Math.random() * 5
    //                                     });
    //                                 });  
    //                                 chart.data.datasets[4].forEach(dataset => {
    //                                     dataset.data.push({
    //                                         x: Date.now(),
    //                                         y: Math.random() * 7
    //                                     });
    //                                 });  
    //                                 chart.data.datasets[5].forEach(dataset => {
    //                                     dataset.data.push({
    //                                         x: Date.now(),
    //                                         y: Math.random() * 8
    //                                     });
    //                                 }); 
    //                                 chart.data.datasets[6].forEach(dataset => {
    //                                     dataset.data.push({
    //                                         x: Date.now(),
    //                                         y: Math.random() * 9
    //                                     });
    //                                 });     
    //                             }
    //                         }
    //                     }
    //                 }
    //             },
    //             interaction: {
    //                 mode: 'index',
    //                 intersect: false
    //             },
    //         };

    //         if (window.myLine3 !== undefined) {
    //             window.myLine3.destroy();
    //         }
    //         let ctx = document.getElementById("myChart3").getContext("2d");
    //         window.myLine3 = new Chart(ctx, config3);
    //     // });
    // } -->