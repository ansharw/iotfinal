<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" href="<?= base_url('assets/image/'); ?>favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= base_url('assets/image/'); ?>favicon.ico" type="image/x-icon">
  <title><?php echo $title; ?> &mdash; KANTIS</title>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

  <?php
  if ($this->uri->segment(1) == "" || $this->uri->segment(1) == "dashboard") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">
  <?php
  } elseif ($this->uri->segment(1) == "suhukelembaban") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <!-- datatable -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@1.27.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">
  <?php
  } elseif ($this->uri->segment(1) == "kipaslampupompa") { ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@1.27.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <?php
  } elseif ($this->uri->segment(1) == "profil") { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-social/bootstrap-social.css">
  <?php
  } ?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

</head>