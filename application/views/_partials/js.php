<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- General JS Scripts -->
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
} elseif ($this->uri->segment(1) == "kipaslampupompa") { ?>
  
<?php
} elseif ($this->uri->segment(1) == "profil") { ?>
  
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
          let datenow1 = moment(latestData.waktu).fromNow();
          let datenow2 = moment(secndData.waktu).fromNow();
          let datenow3 = moment(firstData.waktu).fromNow();
          htmlContent += latestData.suhu + ' &degC';
          htmlContent1 += latestData.waktu + ' (' + datenow1 + ')';
          htmlContent2 += secndData.suhu + ' &degC';
          htmlContent3 += secndData.waktu + ' (' + datenow2 + ')';
          htmlContent4 += firstData.suhu + ' &degC';
          htmlContent5 += firstData.waktu + ' (' + datenow3 + ')';
          $('#suhu').html(htmlContent);
          $('#suhu1').html(htmlContent1);
          $('#suhus2').html(htmlContent2);
          $('#suhu2').html(htmlContent3);
          $('#suhus3').html(htmlContent4);
          $('#suhu3').html(htmlContent5);
        });
      }

      function recentK() {
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
          let datenow1 = moment(latestData.waktu).fromNow();
          let datenow2 = moment(secndData.waktu).fromNow();
          let datenow3 = moment(firstData.waktu).fromNow();
          htmlContent += latestData.kelembaban + ' %';
          htmlContent1 += latestData.waktu + ' (' + datenow1 + ')';
          htmlContent2 += secndData.kelembaban + ' %';
          htmlContent3 += secndData.waktu + ' (' + datenow2 + ')';
          htmlContent4 += firstData.kelembaban + ' %';
          htmlContent5 += firstData.waktu + ' (' + datenow3 + ')';
          $('#kelembaban').html(htmlContent);
          $('#kelembaban1').html(htmlContent1);
          $('#kelembabans2').html(htmlContent2);
          $('#kelembaban2').html(htmlContent3);
          $('#kelembabans3').html(htmlContent4);
          $('#kelembaban3').html(htmlContent5);
        });
      }

      function recentKp() {
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
          let datenow1 = moment(latestData.waktu).fromNow();
          let datenow2 = moment(secndData.waktu).fromNow();
          let datenow3 = moment(firstData.waktu).fromNow();
          let ketr;
          if (latestData.outKipas <= 63.75 || secndData.outKipas <= 63.75 || firstData.outKipas <= 63.75) {
            ketr = " sangat pelan";
          } else if(latestData.outKipas <= 127.50 || secndData.outKipas <= 127.50 || firstData.outKipas <=  127.5){
            ketr = " pelan";
          } else if(latestData.outKipas >= 63.75 && latestData.outKipas <= 191.25 || secndData.outKipas >= 63.75 && secndData.outKipas <= 191.25 || firstData.outKipas >= 63.75 && firstData.outKipas <= 191.25) {
            ketr = " netral";
          } else if(latestData.outKipas >= 127.5 &&  latestData.outKipas <= 255 || secndData.outKipas >= 127.5 && secndData.outKipas <= 255 || firstData.outKipas >= 127.5 && firstData.outKipas <= 255){
            ketr = " kencang";
          } else if(latestData.outKipas >= 191.25 && latestData.outKipas >= 255 || secndData.outKipas >= 191.25 && secndData.outKipas >= 255 || firstData.outKipas >= 191.25 && firstData.outKipas >= 255){
            ketr = " sangat kencang";
          }
          htmlContent += latestData.outKipas + ketr;
          htmlContent1 += latestData.waktu + ' (' + datenow1 + ')';
          htmlContent2 += secndData.outKipas + ketr;
          htmlContent3 += secndData.waktu + ' (' + datenow2 + ')';
          htmlContent4 += firstData.outKipas + ketr;
          htmlContent5 += firstData.waktu + ' (' + datenow3 + ')';
          $('#kipas').html(htmlContent);
          $('#kipas1').html(htmlContent1);
          $('#kipass2').html(htmlContent2);
          $('#kipas2').html(htmlContent3);
          $('#kipass3').html(htmlContent4);
          $('#kipas3').html(htmlContent5);
        });
      }

      function recentL() {
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
          let datenow1 = moment(latestData.waktu).fromNow();
          let datenow2 = moment(secndData.waktu).fromNow();
          let datenow3 = moment(firstData.waktu).fromNow();
          let ketr;
          if (latestData.outLampu <= 63.75 || secndData.outLampu <= 63.75 || firstData.outLampu <= 63.75) {
            ketr = " sangat redup";
          } else if(latestData.outLampu <= 127.50 || secndData.outLampu <= 127.50 || firstData.outLampu <=  127.5){
            ketr = " redup";
          } else if(latestData.outLampu >= 63.75 && latestData.outLampu <= 191.25 || secndData.outLampu >= 63.75 && secndData.outLampu <= 191.25 || firstData.outLampu >= 63.75 || firstData.outLampu <= 191.25) {
            ketr = " netral";
          } else if(latestData.outLampu >= 127.5 && latestData.outLampu <= 255 || secndData.outLampu >= 127.5 && secndData.outLampu <= 255 || firstData.outLampu >= 127.5 && firstData.outLampu <= 255){
            ketr = " terang";
          } else if(latestData.outLampu >= 191.25 && latestData.outLampu >= 255 || secndData.outLampu >= 191.25 && secndData.outLampu >= 255 || firstData.outLampu >= 191.25 && firstData.outLampu >= 255){
            ketr = " sangat terang";
          }
          htmlContent += latestData.outLampu + ketr;
          htmlContent1 += latestData.waktu + ' (' + datenow1 + ')';
          htmlContent2 += secndData.outLampu + ketr;
          htmlContent3 += secndData.waktu + ' (' + datenow2 + ')';
          htmlContent4 += firstData.outLampu + ketr;
          htmlContent5 += firstData.waktu + ' (' + datenow3 + ')';
          $('#lampu').html(htmlContent);
          $('#lampu1').html(htmlContent1);
          $('#lampus2').html(htmlContent2);
          $('#lampu2').html(htmlContent3);
          $('#lampus3').html(htmlContent4);
          $('#lampu3').html(htmlContent5);
        });
      }

      function recentP() {
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
          let datenow1 = moment(latestData.waktu).fromNow();
          let datenow2 = moment(secndData.waktu).fromNow();
          let datenow3 = moment(firstData.waktu).fromNow();
          let ketr;
          if (latestData.outPompa == 255 || secndData.outPompa == 255 || firstData.outPompa == 255) {
            ketr = "Nyala";
          } else if(latestData.outPompa == 0 || secndData.outPompa == 0 || firstData.outPompa == 0) {
            ketr = "Mati";
          }
          htmlContent += latestData.outPompa + ketr;
          htmlContent1 += latestData.waktu + ' (' + datenow1 + ')';
          htmlContent2 += secndData.outPompa + ketr;
          htmlContent3 += secndData.waktu + ' (' + datenow2 + ')';
          htmlContent4 += firstData.outPompa + ketr;
          htmlContent5 += firstData.waktu + ' (' + datenow3 + ')';
          $('#pompa').html(htmlContent);
          $('#pompa1').html(htmlContent1);
          $('#pompas2').html(htmlContent2);
          $('#pompa2').html(htmlContent3);
          $('#pompas3').html(htmlContent4);
          $('#pompa3').html(htmlContent5);
        });
      }

      setInterval(function() {
        recentS();
        recentK();
        recentL();
        recentKp();
        recentP();
      }, 60000);

      $("#desain-list").click(function() {
        $("#carouselExampleIndicators3").carousel(0);
      });
      $("#integrasi-list").click(function() {
        $("#carouselExampleIndicators3").carousel(1);
      });
      $("#sistem-list").click(function() {
        $("#carouselExampleIndicators3").carousel(2);
      });
      $("#diagram-list").click(function() {
        $("#carouselExampleIndicators3").carousel(3);
      });
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
} elseif ($this->uri->segment(1) == "profil") { ?>
  <script>
    $(document).ready(function() {
      $("#profilNav").addClass('active');
    });

    function deleteM(url) {
      $('#btn-delete').attr('href', url);
      $('#removeModal').modal();
    }
  </script>
<?php
} ?>

<!-- Template JS File -->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>