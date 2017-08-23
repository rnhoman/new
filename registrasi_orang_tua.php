<?php
include 'config/class.php';
$data = $siswa_sekolah->ambil_siswa_daftar();
?>
<!-- <pre> -->
  <?php //print_r($data); ?>
<!-- </pre> -->
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
    <div class="col-md-8 col-sm-6 col-sm-offset-2">
      <div class="box">
        <div class="box-header">
          <h2 style="text-align: center;">Registrasi Data Orang Tua Siswa/Siswi SMK N 1 Jogonalan Klaten</h2>
        </div>
        <div class="box-body">
          <!-- Form Tambah Siswa -->
          <form method="POST" enctype="">
            <div class="col-md-6">
              <div class="form-group" hidden="">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control" value="<?php echo $data['nis']; ?>" readonly>
                <p class="help-block">Masukan NIS siswa alumni</p>
              </div>
              <div class="form-group">
                <label>Nama Lengkap Ayah</label>
                <input type="text" name="nama_ayah_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Tempat/Tanggal/Lahir Ayah</label>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" name="tempat_lahir_ayah" class="form-control" placeholder="Tempat Lahir">
                  </div>
                  <div class="col-xs-6">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control datepicker" name="    tgl_lahir_ayah">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Agama Ayah</label>
                <select class="form-control" name="agama_ayah">
                  <option>-Pilih Agama-</option>
                  <option>Islam</option>
                  <option>Katholik</option>
                  <option>Kristen</option>
                  <option>Hindu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kewarganegaraan Ayah</label>
                <input type="text" name="kewarganegaraan_ayah" class="form-control">
              </div>
              <div class="form-group">
                <label>Pendidikan Ayah</label>
                <input type="text" name="pendidikan_ayah" class="form-control">
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan_ayah" class="form-control">
              </div>
              <div class="form-group">
                <label>Penghasilan Ayah</label>
                <input type="text" name="penghasilan_perbulan_ayah" class="form-control">
                <p class="help-block">Ket : Penghasilan terbaru</p>
              </div>
              <div class="form-group">
                <label>Alamat Ayah</label>
                <textarea class="form-control" name="alamat_rumah_ayah" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label>No Tlp/Hp Ayah</label>
                <input type="number" name="no_tlp_ayah" class="form-control">
              </div>
              <div class="form-group">
                <label>Kondisi Ayah</label>
                <input type="text" name="keadaan_ayah" class="form-control">
                <p class="help-block">Masih Hidup/Meninggal Dunia</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap Ibu</label>
                <input type="text" name="nama_ibu_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Tempat/Tanggal/Lahir Ibu</label>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" name="tempat_lahir_ibu" class="form-control" placeholder="Tempat Lahir">
                  </div>
                  <div class="col-xs-6">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control datepicker" name="tgl_lahir_ibu">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Agama Ayah</label>
                <select class="form-control" name="agama_ibu">
                  <option>-Pilih Agama-</option>
                  <option>Islam</option>
                  <option>Katholik</option>
                  <option>Kristen</option>
                  <option>Hindu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kewarganegaraan</label>
                <input type="text" name="kewarganegaraan_ibu" class="form-control">
              </div>
              <div class="form-group">
                <label>Pendidikan Ibu</label>
                <input type="text" name="pendidikan_ibu" class="form-control">
              </div>
              <div class="form-group">
                <label>Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu" class="form-control">
              </div>
              <div class="form-group">
                <label>Penghasilan Ibu</label>
                <input type="text" name="penghasilan_perbulan_ibu" class="form-control">
                <p class="help-block">Ket : Penghasilan terbaru</p>
              </div>
              <div class="form-group">
                <label>Alamat Ibu</label>
                <textarea class="form-control" name="alamat_rumah_ibu" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label>No Tlp/Hp Ibu</label>
                <input type="number" name="no_tlp_ibu" class="form-control">
              </div>
              <div class="form-group">
                <label>Kondisi Ibu</label>
                <input type="text" name="keadaan_ibu" class="form-control">
                <p class="help-block">Masih Hidup/Meninggal Dunia</p>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="col-md-4">
              <a href="index.php?halaman=data_siswa" class="btn btn-danger" onClick='return confirm("Apakah anda ingin membatalkannya?")' ><i class="fa fa-ban"></i>&nbsp; Batal</a>
            </div>
            <!-- button simpan -->
            <div class="col-md-4 col-md-offset-4 col-sm-4">
              <button class="btn btn-success" name="simpan" style="float: right;"><i class="fa fa-save"></i>&nbsp; Simpan</button>
            </div>
          </form>
          <?php 
          if (isset($_POST['simpan'])) 
          {
            $hasil = $ortu->simpan_ortu($_POST['nis'],$_POST['nama_ayah_siswa'],$_POST['tempat_lahir_ayah'],$_POST['tgl_lahir_ayah'],$_POST['agama_ayah'],$_POST['kewarganegaraan_ayah'],$_POST['pendidikan_ayah'],$_POST['penghasilan_perbulan_ayah'],$_POST['alamat_rumah_ayah'],$_POST['no_tlp_ayah'],$_POST['keadaan_ayah'],$_POST['nama_ibu_siswa'],$_POST['tempat_lahir_ibu'],$_POST['tgl_lahir_ibu'],$_POST['agama_ibu'],$_POST['kewarganegaraan_ibu'],$_POST['pendidikan_ibu'],$_POST['pekerjaan_ibu'],$_POST['penghasilan_perbulan_ibu'],$_POST['alamat_rumah_ibu'],$_POST['no_tlp_ibu'],$_POST['keadaan_ibu']);
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>location='registrasi_wali_siswa.php';</script>";
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
