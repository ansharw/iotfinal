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
                        <div>
                            <div class="card-body">
                                <canvas id="myChart3"></canvas>
                            </div>
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

    var progress = document.getElementById('initialProgress');
    let base_url = "<?php echo base_url(); ?>";

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

    function reloadChart1() {
        let label = [];
        let dataS1 = [];
        let dataS2 = [];
        let dataS3 = [];
        let dataS4 = [];
        let dataS5 = [];
        let dataS6 = [];
        let dataSetPoint = [];

        $.getJSON(base_url + "suhukelembaban/ambildata", function(data) {
            $.each(data, function(key, val) {
                label.unshift(val.waktu);
                dataS1.unshift(val.suhu);
                dataS2.unshift(val.suhu1);
                dataS3.unshift(val.suhu2);
                dataS4.unshift(val.suhu3);
                dataS5.unshift(val.suhu4);
                dataS6.unshift(val.suhuLuar);
                dataSetPoint.unshift(val.setPointSuhu)
            });
            const dataChart = {
                labels: label,
                datasets: [{
                        label: 'Suhu 1',
                        data: dataS1,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 2',
                        data: dataS2,
                        backgroundColor: 'rgba(125, 109, 12, 0.2)',
                        borderColor: 'rgba(125, 109, 12, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 3',
                        data: dataS3,
                        backgroundColor: 'rgba(207, 0, 15, 0.2)',
                        borderColor: 'rgba(207, 0, 15, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 4',
                        data: dataS4,
                        backgroundColor: 'rgba(34, 167, 240, 0.2)',
                        borderColor: 'rgba(34, 167, 240, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 5',
                        data: dataS5,
                        backgroundColor: 'rgba(42, 187, 155, 0.2)',
                        borderColor: 'rgba(42, 187, 155, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu Luar',
                        data: dataS6,
                        backgroundColor: 'rgba(247, 202, 24, 0.2)',
                        borderColor: 'rgba(247, 202, 24, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Set Point Suhu',
                        data: dataSetPoint,
                        backgroundColor: 'rgba(0, 0, 0, 0.2)',
                        borderColor: 'rgba(0, 0, 0, 1)',
                        borderDash: [5, 2],
                        tension: 0.2
                    }
                ]
            };

            let config1 = {
                type: 'line',
                data: dataChart,
                options: {
                    animation: false,
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    }
                },
                interaction: {
                    mode: 'index',
                    intersect: false
                },
            };

            if (window.myLine1 !== undefined) {
                window.myLine1.destroy();
            }
            let ctx = document.getElementById("myChart1").getContext("2d");
            window.myLine1 = new Chart(ctx, config1);
        });
    }

    function reloadChart2() {
        let label = [];
        let dataK1 = [];
        let dataK2 = [];
        let dataK3 = [];
        let dataK4 = [];
        let dataK5 = [];
        let dataK6 = [];
        let dataSetPoint = [];

        $.getJSON(base_url + "suhukelembaban/ambildata", function(data) {
            $.each(data, function(key, val) {
                label.unshift(val.waktu);
                dataK1.unshift(val.kelembaban);
                dataK2.unshift(val.kelembaban1);
                dataK3.unshift(val.kelembaban2);
                dataK4.unshift(val.kelembaban3);
                dataK5.unshift(val.kelembaban4);
                dataK6.unshift(val.kelembabanLuar);
                dataSetPoint.unshift(val.setPointKelembaban)
            });
            const dataChart = {
                labels: label,
                datasets: [{
                        label: 'Kelembaban 1',
                        data: dataK1,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Kelembaban 2',
                        data: dataK2,
                        backgroundColor: 'rgba(125, 109, 12, 0.2)',
                        borderColor: 'rgba(125, 109, 12, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Kelembaban 3',
                        data: dataK3,
                        backgroundColor: 'rgba(207, 0, 15, 0.2)',
                        borderColor: 'rgba(207, 0, 15, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Kelembaban 4',
                        data: dataK4,
                        backgroundColor: 'rgba(34, 167, 240, 0.2)',
                        borderColor: 'rgba(34, 167, 240, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Kelembaban 5',
                        data: dataK5,
                        backgroundColor: 'rgba(42, 187, 155, 0.2)',
                        borderColor: 'rgba(42, 187, 155, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Kelembaban Luar',
                        data: dataK6,
                        backgroundColor: 'rgba(247, 202, 24, 0.2)',
                        borderColor: 'rgba(247, 202, 24, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Set Point Kelembaban',
                        data: dataSetPoint,
                        backgroundColor: 'rgba(0, 0, 0, 0.2)',
                        borderColor: 'rgba(0, 0, 0, 1)',
                        borderDash: [5, 2],
                        tension: 0.2
                    }
                ]
            };

            let config2 = {
                type: 'line',
                data: dataChart,
                options: {
                    animation: false,
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    }
                },
                interaction: {
                    mode: 'index',
                    intersect: false
                },
            };

            if (window.myLine2 !== undefined) {
                window.myLine2.destroy();
            }
            let ctx = document.getElementById("myChart2").getContext("2d");
            window.myLine2 = new Chart(ctx, config2);
        });
    }

    function reloadChart3() {
        // let label = [];
        // let dataS1 = [];
        // let dataS2 = [];
        // let dataS3 = [];
        // let dataS4 = [];
        // let dataS5 = [];
        // let dataS6 = [];
        // let dataSetPoint = [];

        // $.getJSON(base_url + "suhukelembaban/ambildata", function(data) {
        //     $.each(data, function(key, val) {
        //         label.unshift(val.waktu);
        //         dataS1.unshift(val.suhu);
        //         dataS2.unshift(val.suhu1);
        //         dataS3.unshift(val.suhu2);
        //         dataS4.unshift(val.suhu3);
        //         dataS5.unshift(val.suhu4);
        //         dataS6.unshift(val.suhuLuar);
        //         dataSetPoint.unshift(val.setPointSuhu)
        //     });
            const dataChart = {
                // labels: label,
                datasets: [{
                        label: 'Suhu 1',
                        data: [],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 2',
                        data: [],
                        backgroundColor: 'rgba(125, 109, 12, 0.2)',
                        borderColor: 'rgba(125, 109, 12, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 3',
                        data: [],
                        backgroundColor: 'rgba(207, 0, 15, 0.2)',
                        borderColor: 'rgba(207, 0, 15, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 4',
                        data: [],
                        backgroundColor: 'rgba(34, 167, 240, 0.2)',
                        borderColor: 'rgba(34, 167, 240, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu 5',
                        data: [],
                        backgroundColor: 'rgba(42, 187, 155, 0.2)',
                        borderColor: 'rgba(42, 187, 155, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Suhu Luar',
                        data: [],
                        backgroundColor: 'rgba(247, 202, 24, 0.2)',
                        borderColor: 'rgba(247, 202, 24, 1)',
                        tension: 0.2
                    },
                    {
                        label: 'Set Point Suhu',
                        data: [],
                        backgroundColor: 'rgba(0, 0, 0, 0.2)',
                        borderColor: 'rgba(0, 0, 0, 1)',
                        borderDash: [5, 2],
                        tension: 0.2
                    }
                ]
            };

            let config3 = {
                type: 'line',
                data: dataChart,
                options: {
                    // animation: false,
                    // responsive: true,
                    // plugins: {
                    //     legend: {
                    //         position: 'top',
                    //     },
                    // },
                    scales: {
                        x: {
                            type: 'realtime',
                            realtime: {
                                delay: 3000,
                                onRefresh: chart => {
                                    chart.data.datasets.forEach(dataset => {
                                        dataset.data.push({
                                            x: Date.now(),
                                            y: Math.random()
                                        });
                                    });   
                                }
                            }
                        }
                    }
                },
                interaction: {
                    mode: 'index',
                    intersect: false
                },
            };

            if (window.myLine3 !== undefined) {
                window.myLine3.destroy();
            }
            let ctx = document.getElementById("myChart3").getContext("2d");
            window.myLine3 = new Chart(ctx, config2);
        // });
    }

    setInterval(function() {
        reloadChart1();
        reloadChart2();
    }, 60000);

    function startTimer(duration, display) {
        var timer = duration,
            minutes, seconds;
        setInterval(function() {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    var oneMinutes = 60 * 1,
        display = document.querySelector('#time');
    startTimer(oneMinutes, display);
</script>