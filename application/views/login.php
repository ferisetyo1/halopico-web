<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HaloPico - Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("public/plugins/fontawesome-free/css/all.min.css") ?>">
    <link rel="shortcut icon" href="<?= base_url('public/dist/img/logo.png') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url("public/dist/css/adminlte.min.css") ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url("public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>HaloPico</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <?php if ($status !== "") { ?>
                    <?php if ($status == "password_salah") { ?>
                        <div class="alert alert-danger">
                            <strong>Failed Login!</strong> user/password salah.
                        </div>
                        <br>
                    <?php } ?>
                <?php } ?>
                <form action="<?= base_url('login/proses') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="user">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="<?= base_url("public/plugins/jquery/jquery.min.js"); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url("public/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url("public/dist/js/adminlte.min.js"); ?>"></script>

</body>

</html>