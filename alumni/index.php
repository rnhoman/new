<?php
session_start();
include '../config/class.php';
if (!isset($_SESSION['alumni'])) 
{
  echo "<script>location='../login.php';</script>";
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Alumni SMK N 1 Jogonalan Klaten</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Datetimepicker -->
  <link rel="stylesheet" type="text/css" href="plugins/datetimepicker/bootstrap-datetimepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
      -->
      <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LM</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Alumni</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="dist/img/user(1).png" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $_SESSION['alumni']['nama_lengkap']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="dist/img/user(1).png" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION['alumni']['nama_lengkap']; ?>
                    <small>Bidang Study Keahlian - <?php echo $_SESSION['alumni']['bidang_study']; ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="index.php?halaman=ubah_password" class="btn btn-default btn-flat">Ubah Password</a>
                  </div>
                  <div class="pull-right">
                    <a href="index.php?halaman=logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- menghidden menu -->
        <?php 

        $hasil = "";
        //mendapatkan data alumni yg login
        $nis = $_SESSION['alumni']['nis'];
        $arrayalumni = $regist_alumni_sklh->ambil_regis_alumni_nis($nis);
        
        if (empty($arrayalumni['nis']) or empty($arrayalumni['kegiatan_setelah_lulus'])) 
        {
          $hasil = "ada yg kosong";
        }
        
        ?>

        <!-- jika form sudah diisi -->
        <?php if (empty($hasil)): ?>

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user(1).png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['alumni']['nama_lengkap']; ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="<?php if (!isset($_GET['halaman'])) {echo "active"; } ?>"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview <?php if ($_GET['halaman']=="tentang_sekolah") {echo "active";} elseif ($_GET['halaman']=="visi_misi") {echo "active";} ?>">
              <a href="#"><i class="fa fa-eye"></i> <span>Profil Sekolah</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if ($_GET['halaman']=="tentang_sekolah") {echo "active";} ?>"><a href="index.php?halaman=tentang_sekolah"><i class="fa fa-bell"></i>Tentang Sekolah</a></li>
                <li class="<?php if ($_GET['halaman']=="visi_misi") {echo "active";} ?>"><a href="index.php?halaman=visi_misi"><i class="fa fa-bell"></i>Visi Misi Sekolah</a></li>
              </ul>
            </li>
            <li class="<?php if ($_GET['halaman']=="profil_alumni") {echo "active";} ?>"><a href="index.php?halaman=profil_alumni"><i class="fa fa-users"></i> <span>Profil Alumni</span></a></li>
            <li class="treeview <?php /*Data Event*/ if ($_GET['halaman']=="event") {echo "active";} elseif ($_GET['halaman']=="posting_event") {echo "active";} /*Data Lowongan Pekerjaan*/ elseif ($_GET['halaman']=="loker") {echo "active";} elseif ($_GET['halaman']=="posting_loker") {echo "active";} ?>">
              <a href="#"><i class="fa fa-link"></i> <span>Pengumuman</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if ($_GET['halaman']=="event") {echo "active";} elseif ($_GET['halaman']=="posting_event") {echo "active";} ?>"><a href="index.php?halaman=event"><i class="fa fa-circle-o"></i>Event</a></li>
                <li class="<?php if ($_GET['halaman']=="loker") {echo "active";} elseif ($_GET['halaman']=="posting_loker") {echo "active";} ?>"><a href="index.php?halaman=loker"><i class="fa fa-circle-o"></i>Lowongan Pekerjaan</a></li>
              </ul>
            </li>
            <li class="<?php if ($_GET['halaman']=="kartu_alumni") {echo "active";} ?>"><a href="index.php?halaman=kartu_alumni"><i class="fa fa-users"></i> <span>Kartu Alumni</span></a></li>
          </ul>
          <!-- /.sidebar-menu -->

          <!-- End form sudah diisi -->
        <?php endif ?>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>SMK Negeri 1 Jogonalan Klaten</h1>
        <?php

        $hal['tentang_sekolah'] = "Tentang Sekolah";
        $hal['visi_misi'] = "Visi Misi Sekolah" ;
        $hal['profil_alumni'] = "Profil Alumni" ;
        $hal['event'] = "Data Event" ;
        $hal['lihatevent'] = "Lihat Postingan Event" ;
        $hal['loker'] = "Data Lowongan Pekerjaan" ;
        $hal['lihatloker'] = "Lihat Postingan Lowongan Pekerjaan" ;
        $hal['kartu_alumni'] = "Cetak Kartu Alumni" ;
        $hal['ubah_password'] = "Ganti Password" ;
        $hal['logout'] = "Log Out" ;
        $hal[''] = "Dashboard" ;

        ?>

        <?php 
        if (isset($_GET['halaman'])) 
        {
          $halaman = $_GET['halaman'];
        }
        else
        {
          $halaman = "";
        }
        ?>

        <ol class="breadcrumb">
          <?php if (isset($halaman)): ?>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><?php echo $hal[$halaman]; ?></a></li>
          <?php else: ?>
            <?php echo " "; ?>

          <?php endif ?>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">



        <!-- Your Page Content Here -->
        <?php 

          // untuk mengambil halaman
        if (!isset($_GET['halaman']))
        {
          include 'home.php';
        }

          // Profil Sekolah
        elseif ($_GET['halaman']=="tentang_sekolah")
        {
          include 'pages/profil_sekolah/tentang_sekolah.php';
        }
        elseif ($_GET['halaman']=="visi_misi")
        {
          include 'pages/profil_sekolah/visi_misi.php';
        }

        // Registrasi Alumni
        
        // Profil Alumni
        elseif ($_GET['halaman']=="profil_alumni")
        {
          include 'pages/profil_alumni/profil_alumni.php';
        }

        // Pengumuman Event
        elseif ($_GET['halaman']=="event")
        {
          include 'pages/pengumuman/event/posting_event.php';
        }
        elseif ($_GET['halaman']=="lihatevent")
        {
          include 'pages/pengumuman/event/lihatevent.php';
        }

        // Pengumuman Lowongan Pekerjaan
        elseif ($_GET['halaman']=="loker")
        {
          include 'pages/pengumuman/loker/posting_loker.php';
        }
        elseif ($_GET['halaman']=="lihatloker")
        {
          include 'pages/pengumuman/loker/lihatloker.php';
        }

        // Kartu Alumni
        elseif ($_GET['halaman']=="kartu_alumni")
        {
          include 'pages/kartu_alumni/lihatkartualumni.php';
        }

        // Ubah Password
        elseif ($_GET['halaman']=="ubah_password")
        {
          include 'pages/ubah_password/edit_pass.php';
        }

          // External
        elseif ($_GET['halaman']=="logout")
        {
          include '../logout.php';
        }
        ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer hidden-print">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript::;">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript::;">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".kontenisi").wysihtml5();
  });
</script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- Datetimepicker -->
<script src="plugins/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/id.js"></script>
<script>
 $(function () {
   $('#datetimepicker').datetimepicker({
    /*format: 'DD/MMMM/YYYY HH:mm',*/
    format: 'Y-MM-D HH:mm:ss'
          //locale: 'id', //Contoh Bahasa Indonesia
        });

   $('.datepicker').datepicker({
    autoclose: true, format: 'yyyy/mm/dd'
  });


 });


</script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();
    //Date picker
    // $('#datepicker').datepicker({
    //   autoclose: true, format : 'yyyy/mm/dd'
    // });

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    // Konten
    
    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });

    //Data Tables
    $("#datatable1").DataTable();
    $('#datatable2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  })
</script>
</body>
</html>
