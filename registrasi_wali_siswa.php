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
          <h2 style="text-align: center;">Registrasi Data Wali Siswa/Siswi SMK N 1 Jogonalan Klaten</h2>
        </div>
        <div class="box-body">
          <!-- Form Tambah Siswa -->
          <form method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap Wali</label>
                <input type="text" name="nama_wali_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir_wali_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir Wali Siswa</label>
                <div class="input-group">
                  <input type="text" class="form-control datepicker" name="tgl_lahir_wali_siswa" autocomplete="off" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama_wali_siswa">
                  <option>-Pilih Agama-</option>
                  <option>Islam</option>
                  <option>Kristen</option>
                  <option>Khatolik</option>
                  <option>Hindu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kewarganegaraan Wali Siswa</label>
                <input type="text" name="kewarganegaraan_wali_siswa" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Pendidikan Wali Siswa</label>
                <input type="text" name="pendidikan_wali_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Pekerjaan Wali Siswa</label>
                <input type="text" name="pekerjaan_wali_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Penghasilan Perbulan</label>
                <input type="text" name="penghasilan_perbulan_wali_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat Wali Siswa</label>
                <textarea class="form-control" rows="3" name="alamat_wali_siswa"></textarea>
              </div>
              <div class="form-group">
                <label>No Tlp/Hp Wali Siswa</label>
                <input type="number" name="no_tlp_wali_siswa" class="form-control">
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
          if (isset($_POST['simpan'])) 
          {
            $hasil = $wali->simpan_wali_siswa($_POST['nama_wali_siswa'],$_POST['tempat_lahir_wali_siswa'],$_POST['tgl_lahir_wali_siswa'],$_POST['agama_wali_siswa'],$_POST['kewarganegaraan_wali_siswa'],$_POST['pendidikan_wali_siswa'],$_POST['pekerjaan_wali_siswa'],$_POST['penghasilan_perbulan_wali_siswa'],$_POST['alamat_wali_siswa'],$_POST['no_tlp_wali_siswa']);
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>location='index.php?halaman=wali_siswa';</script>";

          }
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
        autoclose: true, format: 'yyyy-m-d'
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
