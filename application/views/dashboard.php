<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Rancangan Sistem</h4>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/image/slide1.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/image/slide2.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/image/slide3.png" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/image/slide4.png" alt="Fourth slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Keterangan Gambar</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="desain-list" data-toggle="list" href="#list-kandang" role="tab">Slide 1 &rsaquo; Desain kandang ayam</a>
                                        <a class="list-group-item list-group-item-action" id="integrasi-list" data-toggle="list" href="#list-alat" role="tab">Slide 2 &rsaquo; Integrasi sistem</a>
                                        <a class="list-group-item list-group-item-action" id="sistem-list" data-toggle="list" href="#list-diagram" role="tab">Slide 3 &rsaquo; Desain Sistem</a>
                                        <a class="list-group-item list-group-item-action" id="diagram-list" data-toggle="list" href="#list-activity" role="tab">Slide 4 &rsaquo; Activity Diagram</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="section-title mt-0">Penelitian Selama 14 Hari</div>
                            <div class="table-responsive">
                                <table class="table table-sm table-striped">
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
                                                <?php $y = 12;
                                                while ($j <= 14) : ?>
                                                    <?php $j++; ?>
                                                    <td>
                                                        <b><?php echo $y++ ?> Oktober 2021</b>
                                                    </td>
                                                <?php endwhile; ?>
                                            <?php endfor; ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="section-title">Realtime Conditions</h2>
            <p class="section-lead">
                Berikut merupakan keadaan suhu, kelembaban, kipas, pompa dan lampu pada kandang saat ini dalam rentang waktu <b>1 menit</b> sekali
            </p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-thermometer-three-quarters"></i>
                            </div>
                            <h5>Suhu</h5>
                            <div class="card-description">Recently Temperature</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="suhu"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="suhu1"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="suhus2"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="suhu2"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="suhus3"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="suhu3"></div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url(); ?>suhukelembaban#myChart1" class="ticket-item ticket-more">
                                    View All <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-circle-notch"></i>
                            </div>
                            <h5>Kelembaban</h5>
                            <div class="card-description">Recently Humidity</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="kelembaban"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="kelembaban1"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="kelembabans2"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="kelembaban2"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="kelembabans3"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="kelembaban3"></div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url(); ?>suhukelembaban#myChart2" class="ticket-item ticket-more">
                                    View All <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-wind"></i>
                            </div>
                            <h5>Kipas</h5>
                            <div class="card-description">Recently Fan</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="kipas"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="kipas1"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="kipass2"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="kipas2"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="kipass3"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="kipas3"></div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url(); ?>kipaslampupompa#myChart1" class="ticket-item ticket-more">
                                    View All <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-water"></i>
                            </div>
                            <h5>Pompa</h5>
                            <div class="card-description">Recently Pump</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="pompa"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="pompa1"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="pompas2"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="pompa2"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="pompas3"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="pompa3"></div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url(); ?>kipaslampupompa#myChart3" class="ticket-item ticket-more">
                                    View All <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-lightbulb"></i>
                            </div>
                            <h5>Lampu</h5>
                            <div class="card-description">Recently Lamp</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="lampu"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="lampu1"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="lampus2"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="lampu2"></div>
                                    </div>
                                </a>
                                <a href="#" class="ticket-item">
                                    <div class="ticket-title">
                                        <h3 id="lampus3"></h3>
                                    </div>
                                    <div class="ticket-info">
                                        <div id="lampu3"></div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url(); ?>kipaslampupompa#myChart2" class="ticket-item ticket-more">
                                    View All <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>