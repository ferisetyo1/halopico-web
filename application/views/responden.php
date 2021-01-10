<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url("public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")?>">
<link rel="stylesheet" href="<?=base_url('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
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
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>No. Hp</th>
                                        <th>Pekerjaan</th>
                                        <th>Gejala Covid-19</th>
                                        <th>Kondisi Psikologis</th>
                                        <th>Kota</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($variable as $key => $value) {?>
                                    <tr>
                                        <td>{{this.nama}}</td>
                                        <td>{{this.userName}} </td>
                                        <td>{{this.nohp}}</td>
                                        <td>{{this.pekerjaan}}</td>
                                        <td>{{this.selfReportCovidHasil}}</td>
                                        <td>{{this.kondisiPsikologis}}</td>
                                        <td>{{this.kota}}</td>
                                        <td><button type="button" class="btn btn-block bg-gradient-warning btn-sm">Lihat</button></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>No. Hp</th>
                                        <th>Pekerjaan</th>
                                        <th>Gejala Covid-19</th>
                                        <th>Kondisi Psikologis</th>
                                        <th>Kota</th>
                                        <th>Action</th>
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
