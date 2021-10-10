<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-1">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url('dashboard'); ?>">KANDANG OTOMATIS</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url('dashboard'); ?>">KT</a>
    </div>
    <ul class="sidebar-menu">
      <!--sidebar menu header-->
      <li class="menu-header">Main Menu</li>
      <!--sidebar menu list-->
      <li id="dashboardNav"><a class="nav-link" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

      <li id="suhuKelembabanNav"><a class="nav-link" href="<?php echo base_url(); ?>suhukelembaban"><i class="fas fa-thermometer-three-quarters"></i> <span>Suhu dan Kelembaban</span></a></li>

      <li id="kipasLampuNav"><a class="nav-link" href="<?php echo base_url(); ?>kipaslampu"><i class="fas fa-wind"></i> <span>Kipas, Lampu dan Pompa</span></a></li>

      <li id="profilNav"><a class="nav-link" href="<?php echo base_url(); ?>profil"><i class="fas fa-user-circle"></i> <span>Profil</span></a></li>

      <li><a class="nav-link hide-sidebar-mini" href="<?php echo base_url(); ?>auth/logout"><i class="fas fa-sign-out-alt"></i><span style="color:red;">Log out</span></a></li>

    </ul>
  </aside>
  <br><br>
</div>