<?php 
include 'config/class.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reset Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
  <div class="register-box">

    <div class="register-box-body">
      <p class="login-box-msg">Reset membership</p>

      <form method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nomor Induk Siswa" name="nis">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-success btn-block btn-flat" name="daftar">Reset</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php 
      if (isset($_POST['daftar']))
      {
        // menghitung banyak karakter pada nis
        $banyak_karakter_nis = strlen($_POST['nis']);

        // jika banyak karakter nis sama dengan 4 maka
        if ($banyak_karakter_nis == 4) 
        {
          $hasil = $alumni->reset_pass($_POST['nis'],$_POST['email']);
          if ($hasil == "berhasil") 
          {
            echo "<div class='alert alert-info'>Berhasil daftar</div>";
            echo "<meta http-equiv='refresh' content='2;url=login.php'>";
          }
          else
          {
            echo "<div class='alert alert-info'>Gagal mendaftar, nis tidak sesuai</div>";
            echo "<meta http-equiv='refresh' content='2;url=registrasialumni.php'>";
          }
        }
        else
        {
          echo "<div class='alert alert-info'>Nomor Induk Siswa wajib 4 digit</div>";
        }
      }
      ?>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 2.2.3 -->
  <script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
