<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url("public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") ?>">
<link rel="stylesheet" href="<?= base_url('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pakar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Pakar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Para Pakar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div style="text-align: right; color:white"><a href="<?= base_url('pakar/tambah') ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a></div>
                            <br>
                            <?php if ($status!=="") { ?>
                                <?php if ($status == "sukses_insert") { ?>
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> pakar telah ditambahkan.
                                    </div>
                                <?php } else if ($status == "sukses_delete") { ?>
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> pakar telah dihapus.
                                    </div>
                                <?php } else if ($status == "gagal_delete") { ?>
                                    <div class="alert alert-danger">
                                        <strong>Failed!</strong> pakar gagal dihapus.
                                    </div>
                                    <?php } else if ($status == "gagal_insert") { ?>
                                    <div class="alert alert-danger">
                                        <strong>Failed!</strong> pakar gagal ditambahkan.
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. HP</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($pakar as $key => $value) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= ucwords($value->nama) ?></td>
                                            <td><?= $value->noHp ?></td>
                                            <td><?= ucwords($value->tempat) ?></td>
                                            <td><a href="<?= base_url('pakar/delete/').$value->doc_id ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. Hp</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>