<?php 
    session_start();
    include 'config/class.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
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
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <img src="dist/logo1.png" width="100px;"> -->
    <a href="../../index2.html"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in SMK Negeri 1 Jogonalan Klaten</p>

    <!-- code login -->
    <?php 
        if (isset($_POST['login'])) 
        {
            $hasil = $admin->login_admin($_POST['username'],$_POST['password']);

            // suksesnya admin
            if ($hasil == "sukses") 
            {
                echo "<script>alert('Selamat Datang Administrator');</script>";
                echo "<meta http-equiv='refresh' content='1;url=admin/index.php'>";
            }
            else
            {
                // suksesnya alumni
                $hasilalumni = $alumni->login_alumni($_POST['username'],$_POST['password']);
                // Menjalankan lock screen
                $admin->validasi_login();
                if ($hasilalumni == "sukses") 
                {
                    echo "<script>alert('Selamat Datang Alumni');</script>";
                    echo "<meta http-equiv='refresh' content='1;url=alumni/index.php'>";
                }
                else
                {
                    echo "<script>alert('Gagal login, username/password salah!');</script>";
                    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                }
            }
        }
    ?>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="username" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <a href="registrasi_data_siswa.php" class="btn btn-primary btn-block btn-flat">Registrasi Data</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-success btn-block btn-flat" name="login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    
    <a href="resetpassword.php">Reset my password</a><br>
    <a href="registrasialumni.php" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
