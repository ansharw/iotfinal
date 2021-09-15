<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/image/logo.png" alt="logo" width="100" class="shadow-light">
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div id="messages"></div>
              <?php if ($this->session->flashdata('errors')) : ?>
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $this->session->flashdata('errors'); ?>
                  </div>
                </div>
              <?php endif; ?>

              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/login'); ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" required autofocus autocomplete="off" placeholder="Username">
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="simple-footer">
        Copyright &copy; PTIK UNNES <?= date('Y') ?>
      </div>
    </section>
  </div>