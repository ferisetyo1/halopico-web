<div class="content-wrapper" style="min-height: 1244.06px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Responden</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('pakar') ?>">Pakar</a></li>
            <li class="breadcrumb-item active">Tambah Pakar</li>
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
              <h3 class="card-title">Tambah Pakar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?=base_url('pakar/prosestambah')?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>No Hp</label>
                  <input type="text" class="form-control" name="nohp">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="tempat">
                </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>

          <!-- /.card -->
          <!-- </div> -->
          <!--/.col (left) -->
          <!-- right column -->
          <!-- <div class="col-md-12"> -->
          <!-- general form elements -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>