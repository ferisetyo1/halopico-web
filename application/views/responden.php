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
                    <h1>Data Responden</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Responden</li>
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
                            <h3 class="card-title">Data pengguna android</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>No. Hp</th>
                                        <th>Pekerjaan</th>
                                        <th>Gejala Covid-19</th>
                                        <th>Kondisi Psikologis</th>
                                        <th>Kota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($user as $key => $value) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><a href="<?=base_url('responden/detail/').$value->userName?>"><?= ucwords($value->nama) ?></a></td>
                                            <td><?= $value->userName ?></td>
                                            <td><?= $value->nohp ?></td>
                                            <td><?= ucwords($value->pekerjaan) ?></td>
                                            <td><?= isset($value->selfReportCovidHasil) ? ($value->selfReportCovidHasil != null ? ucwords($value->selfReportCovidHasil) : 'Belum test') : 'Belum test' ?></td>
                                            <td><?= isset($value->kondisiPsikologis) ? ($value->kondisiPsikologis != null ? ucwords($value->kondisiPsikologis) : 'Belum test') : 'Belum test' ?></td>
                                            <td><?= ucwords($value->kota) ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>No. Hp</th>
                                        <th>Pekerjaan</th>
                                        <th>Gejala Covid-19</th>
                                        <th>Kondisi Psikologis</th>
                                        <th>Kota</th>
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