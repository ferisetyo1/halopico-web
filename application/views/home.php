<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                <?php if(isset($covid['OTG'])) echo count($covid['OTG']); else echo 0; ?>
              </h3>

              <p>Orang Tanpa Gejala</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?=base_url()?>responden?filter=otg" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php if(isset($covid['ODP'])) echo count($covid['ODP']); else echo 0; ?></h3>
              <p>Orang Dalam Pemantauan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url()?>responden?filter=odp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php if(isset($covid['PDP'])) echo count($covid['PDP']); else echo 0; ?></h3>
              <p>Pasien Dalam Pengawasan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?=base_url()?>responden?filter=pdp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Stastik Responden
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#covid-chart" data-toggle="tab">Gejala Covid-19</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#kondisi-chart" data-toggle="tab">Kondisi Responden</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pekerjaan-chart" data-toggle="tab">Pekerjaan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#provinsi-chart" data-toggle="tab">Provinsi</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.card-header -->
            
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="covid-chart" style="position: relative; height: 300px;">
                  <canvas id="covid-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
                <div class="chart tab-pane" id="kondisi-chart" style="position: relative; height: 300px;">
                  <canvas id="kondisi-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
                <div class="chart tab-pane" id="pekerjaan-chart" style="position: relative; height: 300px;">
                  <canvas id="pekerjaan-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
                <div class="chart tab-pane" id="provinsi-chart" style="position: relative; height: 300px;">
                  <canvas id="provinsi-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Stastik Pakar
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#chart-prov-pakar" data-toggle="tab">Alamat</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.card-header -->
            
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="covid-chart" style="position: relative; height: 300px;">
                  <canvas id="chart-prov-pakar" height="300" style="height: 300px;"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->