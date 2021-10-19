<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- General JS Scripts -->
<!-- <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/modules/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- JS Libraies -->
<?php
if ($this->uri->segment(1) == "" || $this->uri->segment(1) == "dashboard") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
} elseif ($this->uri->segment(1) == "suhukelembaban") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <!-- <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- toast fitur -->
    <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- bates -->
  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "kipaslampupompa") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <!-- <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- toast fitur -->
    <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- bates -->
  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "profil") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <!-- <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script> -->

    <!-- toast fitur -->
    <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- bates -->
  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } ?>
<?php
} ?>
<!-- Page Specific JS File -->
<?php
if ($this->uri->segment(1) == "dashboard") { ?>
  <script>
    $(document).ready(function(){
      $("#dashboardNav").addClass('active');
      let base_url = "<?php echo base_url(); ?>";

      function recentS() {
        $.getJSON(base_url + "dashboard/recent-activity", function(data) {
          let latestData = data[data.length-3];
          let secndData = data[data.length-2];
          let firstData = data[data.length-1];
          let htmlContent = '';
          let htmlContent1 = '';
          let htmlContent2 = '';
          let htmlContent3 = '';
          let htmlContent4 = '';
          let htmlContent5 = '';
          htmlContent += latestData.suhu + ' &degC';
          htmlContent1 += latestData.waktu;
          htmlContent2 += secndData.suhu + ' &degC';
          htmlContent3 += secndData.waktu;
          htmlContent4 += firstData.suhu + ' &degC';
          htmlContent5 += firstData.waktu;
          $('#suhu').html(htmlContent);
          $('#suhu1').html(htmlContent1);
          $('#suhus2').html(htmlContent2);
          $('#suhu2').html(htmlContent3);
          $('#suhus3').html(htmlContent4);
          $('#suhu3').html(htmlContent5);
        });
      }
      setInterval(function() {
        recentS();
      }, 60000);
    });
  </script>

<?php
} elseif ($this->uri->segment(1) == "suhukelembaban") { ?>
  <script>
    let tabel1, tabel2;
    $(document).ready(function() {
      $("#suhuKelembabanNav").addClass('active');
      var base_url = "<?php echo base_url(); ?>";

      function reloadChart1() {
        let label = [];
        let dataS1 = [];
        let dataS2 = [];
        let dataS3 = [];
        let dataS4 = [];
        let dataS5 = [];
        let dataS6 = [];
        let dataSetPoint = [];

        $.getJSON(base_url + "data-suhu-kelembaban", function(data) {
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
              },
              scales: {
                x: {
                  type: 'time',
                  time: {
                    tooltipFormat: 'dd MMM y hh:mm'
                  },
                },
                y: {
                  title: {
                    display: true,
                    text: 'Suhu Dalam Satuan Celcius (°C)'
                  }
                }
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

        $.getJSON(base_url + "data-suhu-kelembaban", function(data) {
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
              },
              scales: {
                x: {
                  type: 'time',
                  time: {
                    tooltipFormat: 'dd MMM y hh:mm'
                  },
                },
                y: {
                  title: {
                    display: true,
                    text: 'Kelembaban Dalam Persen (%)'
                  }
                }
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

      tabel1 = $('#table1').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "order": [[ 0, 'desc' ]],
        "ajax": {
          "url": base_url + 'suhukelembaban/datatableS',
          "type": "POST"
        },
        "deferRender": true,
        "columns": [
             { data: "waktu" },
             { data: "suhu" },
             { data: "suhu1" },
             { data: "suhu2" },
             { data: "suhu3" },
             { data: "suhu4" },
             { data: "suhuLuar" },
          ],
      });

      tabel2 = $('#table2').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "order": [[ 0, 'desc' ]],
        "ajax": {
          "url": base_url + 'suhukelembaban/datatableK',
          "type": "POST"
        },
        "deferRender": true,
        "columns": [
             { data: "waktu" },
             { data: "kelembaban" },
             { data: "kelembaban1" },
             { data: "kelembaban2" },
             { data: "kelembaban3" },
             { data: "kelembaban4" },
             { data: "kelembabanLuar" },
          ],
      });

      setInterval(function() {
        reloadChart1();
        reloadChart2();
        tabel1.ajax.reload();
        tabel2.ajax.reload();
      }, 60000);
    });

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

    var oneMinutes = 60 * 1,
      display = document.querySelector('#time2');
    startTimer(oneMinutes, display);
  </script>

  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>

  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script>
      $(document).ready(function() {
        $("#suhuKelembabanNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#suhuKelembabanNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#suhuKelembabanNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "kipaslampupompa") { ?>
  <script>
    let tabel1, tabel2, tabel3;
    $(document).ready(function() {
      $("#kipasLampuPompaNav").addClass('active');
      var base_url = "<?php echo base_url(); ?>";

      function reloadChart1() {
        let label = [];
        let dataKp = [];

        $.getJSON(base_url + "data-kipas-lampu-pompa", function(data) {
          $.each(data, function(key, val) {
            label.unshift(val.waktu);
            dataKp.unshift(val.outKipas);
          });
          const dataChart = {
            labels: label,
            datasets: [{
                label: 'Output Kipas',
                data: dataKp,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                tension: 0.2
              },
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
              },
              scales: {
                x: {
                  type: 'time',
                  time: {
                    tooltipFormat: 'dd MMM y hh:mm'
                  },
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
        let dataL = [];

        $.getJSON(base_url + "data-kipas-lampu-pompa", function(data) {
          $.each(data, function(key, val) {
            label.unshift(val.waktu);
            dataL.unshift(val.outLampu);
          });
          const dataChart = {
            labels: label,
            datasets: [{
                label: 'Output Lampu',
                data: dataL,
                backgroundColor: 'rgba(125, 109, 12, 0.2)',
                borderColor: 'rgba(125, 109, 12, 1)',
                tension: 0.2
              },
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
              },
              scales: {
                x: {
                  type: 'time',
                  time: {
                    tooltipFormat: 'dd MMM y hh:mm'
                  },
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
        let label = [];
        let dataP = [];

        $.getJSON(base_url + "data-kipas-lampu-pompa", function(data) {
          $.each(data, function(key, val) {
            label.unshift(val.waktu);
            dataP.unshift(val.outPompa);
          });
          const dataChart = {
            labels: label,
            datasets: [{
                label: 'Output Pompa',
                data: dataP,
                backgroundColor: 'rgba(34, 167, 240, 0.2)',
                borderColor: 'rgba(34, 167, 240, 1)',
                tension: 0.2
              },
            ]
          };

          let config3 = {
            type: 'line',
            data: dataChart,
            options: {
              animation: false,
              responsive: true,
              plugins: {
                legend: {
                  position: 'top',
                },
              },
              scales: {
                x: {
                  type: 'time',
                  time: {
                    tooltipFormat: 'dd MMM y hh:mm'
                  },
                },
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
          window.myLine3 = new Chart(ctx, config3);
        });
      }

      tabel1 = $('#table1').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "order": [[ 0, 'desc' ]],
        "ajax": {
          "url": base_url + 'kipaslampupompa/datatableKp',
          "type": "POST"
        },
        "deferRender": true,
        "columns": [
             { data: "waktu" },
             { data: "outKipas" },
          ],
      });

      tabel2 = $('#table2').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "order": [[ 0, 'desc' ]],
        "ajax": {
          "url": base_url + 'kipaslampupompa/datatableLm',
          "type": "POST"
        },
        "deferRender": true,
        "columns": [
             { data: "waktu" },
             { data: "outLampu" },
          ],
      });

      tabel3 = $('#table3').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true,
        "order": [[ 0, 'desc' ]],
        "ajax": {
          "url": base_url + 'kipaslampupompa/datatablePm',
          "type": "POST"
        },
        "deferRender": true,
        "columns": [
             { data: "waktu" },
             { data: "outPompa" },
          ],
      });

      setInterval(function() {
        reloadChart1();
        reloadChart2();
        reloadChart3();
        tabel1.ajax.reload();
        tabel2.ajax.reload();
        tabel3.ajax.reload();
      }, 60000);
    });

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

    var oneMinutes = 60 * 1,
      display = document.querySelector('#time2');
    startTimer(oneMinutes, display);

    var oneMinutes = 60 * 1,
      display = document.querySelector('#time3');
    startTimer(oneMinutes, display);
  </script>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>

  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script>
      $(document).ready(function() {
        $("#kipasLampuPompaNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#kipasLampuPompaNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#kipasLampuPompaNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "profil") { ?>
  <script>
    $(document).ready(function() {
      $("#managePengabdianNav").addClass('active');
    });

    function deleteM(url) {
      $('#btn-delete').attr('href', url);
      $('#removeModal').modal();
    }
  </script>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>

  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script>
      $(document).ready(function() {
        $("#managePengabdianNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#managePengabdianNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#managePengabdianNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} ?>

<!-- Template JS File -->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>