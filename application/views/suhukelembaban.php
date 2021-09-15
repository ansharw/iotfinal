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
                        </div>
                        <div class="card-body">
                            <div id="chart1" style="height: 400px;"></div>
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
                                                <td><?= $row['dateIn'] ?></td>
                                                <td><?= $row['suhu'] ?></td>
                                                <td><?= $row['suhu1'] ?></td>
                                                <td><?= $row['suhu2'] ?></td>
                                                <td><?= $row['suhu3'] ?></td>
                                                <td><?= $row['suhu4'] ?></td>
                                                <td><?= $row['suhuLuar'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td>2018-01-16 - 07.22</td>
                                            <td>32 C</td>
                                            <td>30 C</td>
                                            <td>30 C</td>
                                            <td>30 C</td>
                                            <td>30 C</td>
                                            <td>30 C</td>
                                        </tr>
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
                        <div class="card-body" id="chart2" style="height: 400px;">
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
                                                <td><?= $row['dateIn'] ?></td>
                                                <td><?= $row['kelembaban'] ?></td>
                                                <td><?= $row['kelembaban1'] ?></td>
                                                <td><?= $row['kelembaban2'] ?></td>
                                                <td><?= $row['kelembaban3'] ?></td>
                                                <td><?= $row['kelembaban4'] ?></td>
                                                <td><?= $row['kelembabanLuar'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td>2018-01-16 - 07.22</td>
                                            <td>32 %</td>
                                            <td>30 %</td>
                                            <td>30 %</td>
                                            <td>30 %</td>
                                            <td>30 %</td>
                                            <td>30 %</td>
                                        </tr>
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
    window.onload = function() {
        // suhu
        let chart1 = new CanvasJS.Chart("chart1", {
            zoomEnabled: true,
            axisY: {
                title: "Suhu Kandang Ayam (℃)",
                titleFontFamily: "Nunito"
            },
            axisX: {
                valueFormatString: "DD-MMM",
            },
            legend: {
                fontFamily: "Nunito",
            },
            toolTip: {
                shared: true,
                contentFormatter: function(e) {
                    let content = " ";
                    for (let i = 0; i < e.entries.length; i++) {
                        content += e.entries[i].dataSeries.name + " " + "<strong>" + e.entries[i].dataPoint.y + "℃</strong>";
                        content += "<br/>";
                    }
                    return content;
                }
            },
            data: [{
                    type: "spline",
                    showInLegend: true,
                    name: "Sensor 1",
                    dataPoints: [{
                            x: new Date(2021, 01, 10),
                            y: 100
                        },
                        {
                            x: new Date(2021, 01, 11),
                            y: 80
                        },
                        {
                            x: new Date(2021, 01, 12),
                            y: 60
                        },
                        {
                            x: new Date(2021, 01, 13),
                            y: 70
                        },
                        {
                            x: new Date(2021, 01, 14),
                            y: 50
                        },
                        {
                            x: new Date(2021, 01, 15),
                            y: 90
                        },
                    ]
                },
                {
                    type: "spline",
                    showInLegend: true,
                    name: "Limit",
                    dataPoints: [{
                            x: new Date(2021, 01, 10),
                            y: 100
                        },
                        {
                            x: new Date(2021, 01, 11),
                            y: 90
                        },
                        {
                            x: new Date(2021, 01, 12),
                            y: 80
                        },
                        {
                            x: new Date(2021, 01, 13),
                            y: 70
                        },
                        {
                            x: new Date(2021, 01, 14),
                            y: 60
                        },
                        {
                            x: new Date(2021, 01, 15),
                            y: 50
                        },
                    ]
                },
            ]
        });
        chart1.render();
        $("#table1").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [1, 2, 3, 4]
            }]
        });

        // kelembaban
        let chart2 = new CanvasJS.Chart("chart2", {
            zoomEnabled: true,
            axisY: {
                title: "Kelembaban Kandang Ayam (%)",
                titleFontFamily: "Nunito"
            },
            axisX: {
                valueFormatString: "DD-MMM",
                interval: 10,
                intervalType: "day",
            },
            legend: {
                fontFamily: "Nunito",
            },
            toolTip: {
                shared: true,
                contentFormatter: function(e) {
                    let content = " ";
                    for (let i = 0; i < e.entries.length; i++) {
                        content += e.entries[i].dataSeries.name + " " + "<strong>" + e.entries[i].dataPoint.y + "%</strong>";
                        content += "<br/>";
                    }
                    return content;
                }
            },
            data: [{
                    type: "spline",
                    showInLegend: true,
                    name: "Sensor 1",
                    dataPoints: [{
                            x: new Date(2021, 01, 12),
                            y: 100
                        },
                        {
                            x: new Date(2021, 02, 12),
                            y: 80
                        },
                        {
                            x: new Date(2021, 03, 12),
                            y: 60
                        },
                        {
                            x: new Date(2021, 04, 12),
                            y: 70
                        },
                        {
                            x: new Date(2021, 05, 12),
                            y: 50
                        },
                        {
                            x: new Date(2021, 06, 12),
                            y: 90
                        },
                    ]
                },
                {
                    type: "spline",
                    showInLegend: true,
                    name: "Sensor 2",
                    dataPoints: [{
                            x: new Date(2021, 01, 12),
                            y: 20
                        },
                        {
                            x: new Date(2021, 02, 12),
                            y: 10
                        },
                        {
                            x: new Date(2021, 03, 12),
                            y: 30
                        },
                        {
                            x: new Date(2021, 04, 12),
                            y: 70
                        },
                        {
                            x: new Date(2021, 05, 12),
                            y: 80
                        },
                        {
                            x: new Date(2021, 06, 12),
                            y: 30
                        },
                    ]
                },
                {
                    type: "spline",
                    showInLegend: true,
                    name: "Sensor 3",
                    dataPoints: [{
                            x: new Date(2021, 01, 12),
                            y: 22
                        },
                        {
                            x: new Date(2021, 02, 12),
                            y: 30
                        },
                        {
                            x: new Date(2021, 03, 12),
                            y: 20
                        },
                        {
                            x: new Date(2021, 04, 12),
                            y: 50
                        },
                        {
                            x: new Date(2021, 05, 12),
                            y: 44
                        },
                        {
                            x: new Date(2021, 06, 12),
                            y: 54
                        },
                    ]
                },
                {
                    type: "spline",
                    showInLegend: true,
                    name: "Sensor 4",
                    dataPoints: [{
                            x: new Date(2021, 01, 12),
                            y: 35
                        },
                        {
                            x: new Date(2021, 02, 12),
                            y: 67
                        },
                        {
                            x: new Date(2021, 03, 12),
                            y: 84
                        },
                        {
                            x: new Date(2021, 04, 12),
                            y: 65
                        },
                        {
                            x: new Date(2021, 05, 12),
                            y: 89
                        },
                        {
                            x: new Date(2021, 06, 12),
                            y: 23
                        },
                    ]
                }
            ]
        });
        chart2.render();
        $("#table2").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [1, 2, 3, 4]
            }]
        });
    }
</script>