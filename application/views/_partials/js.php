<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- General JS Scripts -->
<!-- <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/modules/jquery-3.3.1.min.js"></script>
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
    <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- toast fitur -->
    <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- bates -->

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-analytics.js"></script>

    <script>
      // Your web app's Firebase configuration
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      var firebaseConfig = {
        apiKey: "AIzaSyC0n3BR8aR1owo0ntSeFQorP0uJWdakIsY",
        authDomain: "brooding-598d9.firebaseapp.com",
        databaseURL: "https://brooding-598d9-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "brooding-598d9",
        storageBucket: "brooding-598d9.appspot.com",
        messagingSenderId: "421806965706",
        appId: "1:421806965706:web:15f9a087a597cb595f0533",
        measurementId: "G-SRHHF0W04L"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();
    </script>

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
} elseif ($this->uri->segment(1) == "pertukaran") { ?>

  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "pengabdian") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "wirausaha") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "rekognisi") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "beasiswa") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "proker") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "konservasi") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "komunitas") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
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
} elseif ($this->uri->segment(1) == "user") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "edit") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "user") { ?>
  <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "create") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } elseif ($this->uri->segment(2) == "edit") { ?>
    <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <?php
  } ?>
<?php
} ?>
<!-- Page Specific JS File -->
<?php
if ($this->uri->segment(1) == "dashboard") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-dashboard.js"></script>

<?php
} elseif ($this->uri->segment(1) == "suhukelembaban") { ?>
  <script>
    $(document).ready(function() {
      $("#suhuKelembabanNav").addClass('active');
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
} elseif ($this->uri->segment(1) == "kipaslampu") { ?>
  <script>
    $(document).ready(function() {
      $("#kipasLampuNav").addClass('active');
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
        $("#kipasLampuNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#kipasLampuNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#kipasLampuNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "pengabdian") { ?>
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
} elseif ($this->uri->segment(1) == "wirausaha") { ?>
  <script>
    $(document).ready(function() {
      $("#manageWirausahaNav").addClass('active');
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
        $("#manageWirausahaNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageWirausahaNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageWirausahaNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "rekognisi") { ?>
  <script>
    $(document).ready(function() {
      $("#manageRekognisiNav").addClass('active');
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
        $("#manageRekognisiNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageRekognisiNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageRekognisiNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "beasiswa") { ?>
  <script>
    $(document).ready(function() {
      $("#manageBeasiswaNav").addClass('active');
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
        $("#manageBeasiswaNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageBeasiswaNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageBeasiswaNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "proker") { ?>
  <script>
    $(document).ready(function() {
      $("#manageProkerNav").addClass('active');
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
        $("#manageProkerNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageProkerNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageProkerNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "konservasi") { ?>
  <script>
    $(document).ready(function() {
      $("#manageKonservasiNav").addClass('active');
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
        $("#manageKonservasiNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageKonservasiNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageKonservasiNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "komunitas") { ?>
  <script>
    $(document).ready(function() {
      $("#manageKomunitasNav").addClass('active');
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
        $("#manageKomunitasNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageKomunitasNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageKomunitasNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "user") { ?>
  <script>
    $(document).ready(function() {
      $("#manageUserNav").addClass('active');
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
        $("#manageUserNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageUserNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageUserNav").addClass('active');
      });
    </script>
  <?php
  } ?>
<?php
} elseif ($this->uri->segment(1) == "group") { ?>
  <script>
    $(document).ready(function() {
      $("#manageGroupNav").addClass('active');
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
        $("#manageGroupNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "update") { ?>
    <script>
      $(document).ready(function() {
        $("#manageGroupNav").addClass('active');
      });
    </script>
  <?php
  } elseif ($this->uri->segment(2) == "view") { ?>
    <script>
      $(document).ready(function() {
        $("#manageGroupNav").addClass('active');
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