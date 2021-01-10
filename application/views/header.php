<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HaloPICO - Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url("public/plugins/fontawesome-free/css/all.min.css")?>">
  <link rel="shortcut icon" href="<?=base_url('public/dist/img/logo.png')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url("public/dist/css/adminlte.min.css")?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url("public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?=base_url()?>" class="brand-link">
        <img src="<?=base_url("public/dist/img/logo_filled.png")?>" alt="HaloPico Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">HaloPICO</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?=base_url("public/dist/img/avatar04.png")?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?=base_url()?>" class="d-block">Admin HaloPICO</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?=base_url()?>" class="nav-link <?=$active==0?'active':''?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview <?=$active==1?'menu-open':$active==2?'menu-open':$active==3?'menu-open':$active==4?'menu-open':''?>">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  DataSet
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url()?>responden" class="nav-link <?=$active==1?'active':''?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Responden</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url()?>pakar" class="nav-link <?=$active==2?'active':''?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pakar</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url()?>skrining" class="nav-link <?=$active==3?'active':''?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Skrining</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url()?>soal" class="nav-link <?=$active==4?'active':''?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Soal</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">LABELS</li>
            <li class="nav-item">
              <a href="<?=base_url()?>responden?filter=otg" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>OTG</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>responden?filter=odp" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>ODP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>responden?filter=pdp" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">PDP</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
