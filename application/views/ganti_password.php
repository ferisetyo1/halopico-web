<div class="content-wrapper" style="min-height: 1244.06px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Profil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active">Edit Profil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row" id="bePrinted">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Pribadi</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url('settings/prosesgantipassword') ?>" method="POST">
              <div class="card-body">
                <?php if ($status !== "") { ?>
                  <?php if ($status == "sukses") { ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> password telah diganti.
                    </div>
                  <?php } else if ($status == "tidak_cocok") { ?>
                    <div class="alert alert-danger">
                      <strong>Failed!</strong> konfirmasi passwrod tidak cocok.
                    </div>
                  <?php } else if ($status == "failed") { ?>
                    <div class="alert alert-danger">
                      <strong>Failed!</strong> internal service error.
                    </div>
                  <?php } else if ($status == "password_salah") { ?>
                    <div class="alert alert-danger">
                      <strong>Failed!</strong> password lama salah.
                    </div>
                  <?php } ?>
                <?php } ?>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password Lama" name="password_lama" value="">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password Baru" name="password_baru" value="">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_konfirmasi" value="">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </div>
                  <!-- /.col -->
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>