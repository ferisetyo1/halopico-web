<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Skrining</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('skrining') ?>">Skrinning</a></li>
            <li class="breadcrumb-item active">Detail Skrining</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Pribadi</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" value="<?= ucwords($user->nama) ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="text" class="form-control" value="<?= $user->userName ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Registrasi</label>
                  <input type="text" class="form-control" value="<?= date('d-m-Y H:i:s', $user->regTime->_seconds) ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No. HP</label>
                  <input type="text" class="form-control" value="<?= $user->nohp ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="text" class="form-control" value="<?= $user->tglLahir ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input type="text" class="form-control" value="<?= $user->jenisKelamin ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Institusi</label>
                  <input type="text" class="form-control" value="<?= @$user->institusi ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Riwayat Pendidikan</label>
                  <input type="text" class="form-control" value="<?= $user->riwayatPendidikan ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pekerjaan</label>
                  <input type="text" class="form-control" value="<?= $user->pekerjaan ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kota</label>
                  <input type="text" class="form-control" value="<?= $user->kota ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Provinsi</label>
                  <input type="text" class="form-control" value="<?= $user->pekerjaan ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Lengkap</label>
                  <input type="text" class="form-control" value="<?= $user->alamat ?>" disabled>
                </div>
              </div>
            </form>
          </div>

          <!-- /.card -->
          <!-- </div> -->
          <!--/.col (left) -->
          <!-- right column -->
          <!-- <div class="col-md-12"> -->
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Data Kesehatan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Gejala Covid-19</label>
                  <input type="text" class="form-control" value="<?= ucwords(@$user->selfReportCovidHasil) ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kondisi Psikologis</label>
                  <input type="text" class="form-control" value="<?= @$user->kondisiPsikologis ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Hasil Self Report terakhir</label>
                  <input type="text" class="form-control" value="<?= ucfirst(@$user->selfReportQHasil) ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal terakhir skrining</label>
                  <input type="text" class="form-control" onclick="disabledCheck()" value="<?= date('d-m-Y H:i:s', @$user->lastSkrinning->_seconds) ?>" disabled>
                </div>
                <hr>
                <?php if (isset($user->selfReportQ)) { ?>
                  <h5>Record Self Report terakhir</h5>
                  <?php $i = 1;
                  foreach (@$user->selfReportQ as $key1 => $value1) { ?>
                    <?php foreach ($soal as $key2 => $value2) {
                      if ($value1->idSoal === $value2->id) {
                    ?>
                        <div class="form-group">
                          <label for="exampleInputPassword1"><?= ($i++) . ". " . $value2->pertanyaan ?></label>
                          <?php foreach ($value2->jawaban as $key3 => $value3) { ?>
                            <div class="form-check" style="margin-left: 12px;">
                              <input class="form-check-input" type="checkbox" <?= $value1->jawaban == $value3->jawaban ? 'checked' : '' ?>>
                              <label class="form-check-label"><?= $value3->jawaban ?></label>
                            </div>
                          <?php } ?>
                        </div>
                <?php }
                    }
                  }
                } ?>
                <hr>
                <h5>Record Skrinning [<?= date('d-m-Y H:i:s', @$skrining->tanggal->_seconds) ?>]</h5>
                <?php $i = 1;
                foreach (@$skrining->hasilSkrinning as $key0 => $value) { ?>
                  <strong>Skrining <?= $value->tipe === 1 ? 'GHQ' : $value->tipe === 2 ? 'GAD' : $value->tipe === 3 ? 'PHQ' : '' ?></strong>
                  <?php foreach ($value->jawabanUser as $key1 => $value1) { ?>
                    <?php foreach ($soal as $key2 => $value2) {
                      if ($value1->idSoal === $value2->id) {
                    ?>
                        <div class="form-group">
                          <label for="exampleInputPassword1"><?= ($i++) . ". " . $value2->pertanyaan ?></label>
                          <?php foreach ($value2->jawaban as $key3 => $value3) { ?>
                            <div class="form-check" style="margin-left: 12px;">
                              <input class="form-check-input" type="checkbox" <?= $value1->jawaban == $value3->jawaban ? 'checked' : '' ?>>
                              <label class="form-check-label"><?= $value3->jawaban ?></label>
                            </div>
                          <?php } ?>
                        </div>
                <?php }
                    }
                  }
                } ?>
              </div>
            </form>
          </div>

          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>