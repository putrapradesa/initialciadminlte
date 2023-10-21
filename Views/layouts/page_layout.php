<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPO</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/papuabarat.png" />
    <!-- <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/Kemenkes.png" /> -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/ionicons.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/dropzone/min/dropzone.min.css">

    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>

<body class="hold-transition sidebar-mini ">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url(); ?>/assets/img/papuabarat.png" width="20%"
                alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

                    <a class="nav-link" href="#" role="button"><b>Sistem Informasi Persedian Obat</b></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <?php $session = session(); if($session->get('isLogin') == true ) { ?>
                <!-- Messages Dropdown Menu -->

                <li class="nav-item dropdown user-menu">

                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>/assets/dist/img/userloginicon.png"
                            class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline"><?php echo $session->get('name')?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        <li class="user-header bg-primary">
                            <img src="<?php echo base_url(); ?>/assets/dist/img/userloginicon.png"
                                class="img-circle elevation-2" alt="User Image">
                            <p>
                                <?php echo $session->get('name')?>
                            </p>
                        </li>

                        <li class="user-footer">
                            <a href="<?php echo base_url(); ?>/login/logout"
                                class="btn btn-default btn-flat float-right">Keluar</a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
                

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('layouts/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" >
            <!-- Content Header (Page header) -->
            <?= $this->include('layouts/header') ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?= $this->renderSection('content') ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= $this->include('layouts/footer') ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/chart.js/Chart2.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/sparklines/sparkline.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script
        src="<?php echo base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <script src="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.js"></script>
    <script src="<?php echo base_url(); ?>/assets/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>/assets/js/Gauge.js"></script> -->
    <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts-3d.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts-more.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/solid-gauge.js"></script>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>/assets/plugins/chart.js/Chart.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>/assets/dist/js/pages/dashboard.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script> -->

    <?= $this->renderSection('js') ?>

</body>

</html>