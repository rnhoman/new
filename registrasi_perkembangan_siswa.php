<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/iCheck/square/blue.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-sm-offset-3">
      <div class="box">
        <div class="box-header">
          <h2 style="text-align: center;">Registrasi Perkembangan Siswa/Siswi SMK N 1 Jogonalan Klaten</h2>
        </div>
        <div class="box-body">
          <!-- Form Tambah Siswa -->
          <form method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
              <div class="form-group">
                <label>Kesenian</label>
                <input type="text" name="kesenian" class="form-control">
              </div>
              <div class="form-group">
                <label>Olahraga</label>
                <input type="text" name="olahraga" class="form-control">
              </div>
              <div class="form-group">
                <label>Organisasi/Kemasyarakatan</label>
                <input type="text" name="organisasi" class="form-control">
              </div>
              <div class="form-group">
                <label>Kegemaran Lain</label>
                <input type="text" name="hobi_lain" class="form-control">
              </div>
              <div class="form-group">
                <label>Tahun Beasiswa</label>
                <input type="text" name="tahun_beasiswa" class="form-control">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Tingkat Beasiswa</label>
                <input type="text" name="tingkat_beasiswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Dari Beasiswa</label>
                <input type="text" name="dari_beasiswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Tanggal Meninggalakan Sekolah</label>
                <input type="text" name="tgl_meninggalkan_sklh" class="form-control datepicker">
              </div>
              <div class="form-group">
                <label>Alasan Meninggalkan Sekolah</label>
                <textarea name="alasan_meninggalkan_sklh" class="form-control" rows="4"></textarea>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="col-md-1">
              <a href="index.php?halaman=data_siswa" class="btn btn-danger" onClick='return confirm("Apakah anda ingin membatalkannya?")' ><i class="fa fa-ban"></i>&nbsp; Batal</a>
            </div>
            <!-- button simpan -->
            <div class="col-md-4 col-md-offset-7 col-sm-4">
              <button class="btn btn-success" name="simpan" style="float: right;"><i class="fa fa-save"></i>&nbsp; Simpan</button>
            </div>
          </form>
          <?php 
          ?>
        </div>
      </div>
    </div>
    <!-- end row -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 2.2.3 -->
  <script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="admin/bootstrap/js/bootstrap.min.js"></script>
  <!-- bootstrap datepicker -->
  <script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script>
    $(function (){
      $('.datepicker').datepicker({
        autoclose: true, format: 'dd MM yyyy'
      });
    })
  </script>
  <!-- iCheck -->
  <script src="admin/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    });
  </script>
</body>
</html>
