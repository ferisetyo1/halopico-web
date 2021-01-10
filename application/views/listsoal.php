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
                    <h1>Data Soal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Soal</li>
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
                            <h3 class="card-title">Data List Soal</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Tipe</th>
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($soal as $key => $value) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= ucwords($value->id) ?></td>
                                            <td><?php if ($value->tipe === 0) { ?>
                                                    <button class="btn btn-primary">SR</button>
                                                <?php } else if ($value->tipe === 1) { ?>
                                                    <button class="btn btn-info">GHQ</button>
                                                <?php } else if ($value->tipe === 2) { ?>
                                                    <button class="btn btn-success">GAD</button>
                                                <?php } else if ($value->tipe === 3) { ?>
                                                    <button class="btn btn-danger">PHQ</button>
                                                <?php } else { ?>
                                                    <button class="btn btn-warning">SRQ</button>
                                                <?php } ?>
                                            </td>
                                            <td><?= ucwords($value->pertanyaan) ?></td>
                                            <td>
                                                <ol>
                                                    <?php foreach ($value->jawaban as $key => $value) { ?>
                                                        <li><?= $value->jawaban . " (" . ($value->point) . " poin)" ?></li>
                                                    <?php } ?>
                                                </ol>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Tipe</th>
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
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