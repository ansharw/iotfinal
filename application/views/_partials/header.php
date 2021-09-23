<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $title; ?> &mdash; KANTIS</title>
  <link rel="icon" href="<?= base_url('assets/image/'); ?>favicon.ico" type="image/x-icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">
  <!-- <script src="<?php echo base_url(); ?>assets/modules/canvasjs.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
  <script src="https://cdn.jsdelivr.net/npm/luxon@1.27.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script> 
  <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@2.0.0"></script> -->


  <!-- CSS Libraries -->
  <?php
  // dashboard
  if ($this->uri->segment(1) == "" || $this->uri->segment(1) == "dashboard") { ?>
    <!-- <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/modules/canvasjs/canvasjs.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/modules/canvasjs/jquery.canvasjs.min.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">
    <!-- Datatable -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">
  <?php
    // suhu kelembaban
  } elseif ($this->uri->segment(1) == "suhukelembaban") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <!-- <script src="<?php echo base_url(); ?>assets/modules/canvasjs/canvasjs.min.js"></script> --> 
    <!-- chartjs -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@1.27.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@2.0.0"></script> -->
    <!-- datatable -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/prism/prism.css">
    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "kipaslampu") { ?>

    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "pengabdian") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "wirausaha") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "rekognisi") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "beasiswa") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "proker") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "konservasi") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "komunitas") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "user") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/prism/prism.css">
    <?php
    } ?>
  <?php
  } elseif ($this->uri->segment(1) == "group") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "create") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "update") { ?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <?php
    } elseif ($this->uri->segment(2) == "view") { ?>

    <?php
    } ?>
  <?php
  } ?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

</head>