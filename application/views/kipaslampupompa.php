<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kipas, Lampu dan Pompa</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Letak Lampu</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">Berikut adalah letak Lampu pada kandang ayam tertutup (closed house) yang ditunjukkan pada bentuk lingkaran kuning</div>
                            <div class="chocolat-parent">
                                <a href="<?php echo base_url(); ?>assets/image/kandangsuhu.png" class="chocolat-image" title="Letak Lampu">
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
                            <h4>Letak Kipas dan Pompa</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">Berikut adalah letak Kipas dan Pompa pada kandang ayam tertutup (closed house) yang ditunjukkan pada label CP (cooling pad) dan label kipas</div>
                            <div class="chocolat-parent">
                                <a href="<?php echo base_url(); ?>assets/image/kandangkelembaban.png" class="chocolat-image" title="Letak Kipas dan Pompa">
                                    <div>
                                        <img alt="image" src="<?php echo base_url(); ?>assets/image/kandangkelembaban.png" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="section-title">Keterangan Hasil Fuzzy</h2>
            <p class="section-lead">
                Berikut adalah table keterangan dari angka yang dihasilkan oleh fuzzy yang berupa nilai dari lampu, pompa dan kipas. seperti redup, terang, nyala ataupun mati.
            </p>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4>Fuzzy Kipas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered">
                                    <tr>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td>0 - 63.75</td>
                                        <td>Sangat Pelan</td>
                                    </tr>
                                    <tr>
                                        <td>0 - 127.5</td>
                                        <td>Pelan</td>
                                    </tr>
                                    <tr>
                                        <td>63.75 - 191.25</td>
                                        <td>Netral</td>
                                    </tr>
                                    <tr>
                                        <td>127.5 - 255</td>
                                        <td>Kencang</td>
                                    </tr>
                                    <tr>
                                        <td>191.25 - 255</td>
                                        <td>Sangat Kencang</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h4>Fuzzy Lampu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered">
                                    <tr>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td>0 - 63.75</td>
                                        <td>Sangat Redup</td>
                                    </tr>
                                    <tr>
                                        <td>0 - 127.5</td>
                                        <td>Redup</td>
                                    </tr>
                                    <tr>
                                        <td>63.75 - 191.25</td>
                                        <td>Netral</td>
                                    </tr>
                                    <tr>
                                        <td>127.5 - 255</td>
                                        <td>Terang</td>
                                    </tr>
                                    <tr>
                                        <td>191.25 - 255</td>
                                        <td>Sangat Terang</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Fuzzy Pompa</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered">
                                    <tr>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td>255</td>
                                        <td>Nyala</td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td>Mati</td>
                                    </tr>
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
                            <h4>Fuzzy Kipas</h4>
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
                            <h4>Tabel Hasil Fuzzy Kipas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Fuzzy Kipas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($kipas)) : ?>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($kipas as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['outKipas'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($row['outKipas'] <= 63.75) {
                                                        echo "sangat pelan";
                                                      } else if($row['outKipas'] <= 127.5){
                                                        echo "pelan";
                                                      } else if($row['outKipas'] >= 63.75 && $row['outKipas'] <= 191.25) {
                                                        echo "netral";
                                                      } else if($row['outKipas'] >= 127.5 && $row['outKipas'] <= 255){
                                                        echo "kencang";
                                                      } else if($row['outKipas'] >= 191.25 && $row['outKipas'] >= 255 && $row['outKipas'] == 255){
                                                        echo "sangat kencang";
                                                      }
                                                    ?>
                                                </td>
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
                            <h4>Fuzzy Lampu</h4>
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
                            <h4>Tabel Hasil Fuzzy Lampu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table2">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Fuzzy Lampu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($lampu)) : ?>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($lampu as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['outLampu'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($row['outLampu'] <= 63.75) {
                                                        echo "sangat redup";
                                                      } else if($row['outLampu'] <= 127.5){
                                                        echo "redup";
                                                      } else if($row['outLampu'] >= 63.75 && $row['outLampu'] <= 191.25) {
                                                        echo "netral";
                                                      } else if($row['outLampu'] >= 127.5 && $row['outLampu'] <= 255){
                                                        echo "terang";
                                                      } else if($row['outLampu'] >= 191.25 && $row['outLampu'] >= 255 && $row['outLampu'] == 255){
                                                        echo "sangat terang";
                                                      }
                                                    ?>
                                                </td>
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
                            <h4>Pompa</h4>
                            <div class="card-header-action" style="text-align: right;">
                                Data Terakhir Masuk: <b><?= date("d M Y") ?></b><br>
                                <b>Keterangan</b> : <b>p.m</b> = 12.00 Siang - 12.00 Malam, <b>a.m</b> = 12.00 Malam - 12.00 Siang
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="clear">Tunggu sebentar <span id="time3">01:00</span></div>
                            <canvas id="myChart3" height="130px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Pompa</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table3">
                                    <thead>
                                        <tr>
                                            <th>Waktu</th>
                                            <th>Pompa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($pompa)) : ?>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="alert alert-danger">
                                                        <div class="alert-title">Data tidak ditemukan</div>
                                                        <b>Data tidak ditemukan, silahkan cek kembali koneksi dan internet</b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach ($pompa as $row) : ?>
                                            <tr>
                                                <td><?= $row['waktu'] ?></td>
                                                <td><?= $row['outPompa'] ?></td>
                                                <td><?php if ($row['outPompa'] == 255) {
                                                    echo "nyala";
                                                } else if($row['outPompa'] == 0){
                                                    echo "mati";
                                                } ?></td>
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