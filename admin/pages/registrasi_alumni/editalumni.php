<?php 
  $id_regis_alumni = $_GET['id'];
  $merubah_alumni = $regist_alumni_sklh->ambil_regis_alumni($id_regis_alumni);
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Edit Alumni</h2>
    </div>
    <div class="box-body">
        <form method="POST" enctype="multipart/form-data">
            <!-- Data Diri Alumni -->
            <div class="col-md-4">
              <div class="form-group">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control" value="<?php echo $merubah_alumni['nis']; ?>">
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap_alumni" class="form-control" value="<?php echo $merubah_alumni['nama_lengkap_alumni']; ?>">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk_alumni">
                  <option value=" " <?php if ($merubah_alumnip['jk_alumni'] ==' ') {echo "selected"; } ?>>-Jenis Kelamin-</option>
                  <option value="Laki-Laki" <?php if ($merubah_alumnip['jk_alumni'] =='Laki-Laki') {echo "selected"; } ?>>Laki-Laki</option>
                  <option value="perempuan" <?php if ($merubah_alumnip['jk_alumni'] =='Perempuan') {echo "selected"; } ?>>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tempat/Tanggal/Lahir</label>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" name="tempat_lahir_alumni" class="form-control" placeholder="Tempat Lahir" value="<?php echo $merubah_alumni['tempat_lahir_alumni']; ?>">
                  </div>
                  <div class="col-xs-6">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control datepicker" name="tgl_lahir_alumni" value="<?php echo date('Y-m-d', strtotime($merubah_alumni['tgl_lahir_alumni'])); ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama_alumni">
                  <option value="" <?php if($merubah_ortu['agama_alumni'] == ' ') { echo "selected"; }?>>-Pilih Agama-</option>
                    <option value="Islam" <?php if($merubah_ortu['agama_alumni'] == 'Islam') { echo "selected"; }?>>Islam</option>
                    <option value="Katholik" <?php if($merubah_ortu['agama_alumni'] == 'Katholik') { echo "selected"; }?>>Katholik</option>
                    <option value="Kristen" <?php if($merubah_ortu['agama_alumni'] == 'Kristen') { echo "selected"; }?>>Kristen</option>
                    <option value="Hindu" <?php if($merubah_ortu['agama_alumni'] == 'Hindu') { echo "selected"; }?>>Hindu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat Saat Ini</label>
                <textarea class="form-control" rows="3" name="alamat_alumni"><?php echo $merubah_alumni['alamat_alumni']; ?></textarea>
              </div>
              <div class="form-group">
                <label>No Hp Alumni</label>
                <input type="number" name="no_hp_alumni" class="form-control" value="<?php echo $merubah_alumni['no_hp_alumni']; ?>">
              </div>
            </div>

            <!-- Universitas -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email_alumni" class="form-control" value="<?php echo $merubah_alumni['email_alumni']; ?>">
              </div>
              <div class="form-group">
                <label>Kegiatan Setelah Lulus</label>
                <select class="form-control" name="kegiatan_setelah_lulus" required>
                  <option value="" <?php if ($merubah_alumni['kegiatan_setelah_lulus'] == ' ') {echo "selected"; } ?>>-Kegiatan Setelah Lulus-</option>
                  <option value="Kuliah" <?php if ($merubah_alumni['kegiatan_setelah_lulus'] == 'Kuliah') {echo "selected"; } ?>>Kuliah</option>
                  <option value="Bekerja" <?php if ($merubah_alumni['kegiatan_setelah_lulus'] == 'Bekerja') {echo "selected"; } ?>>Bekerja</option>
                  <option value="Wirausaha" <?php if ($merubah_alumni['kegiatan_setelah_lulus'] == 'Wirausaha') {echo "selected"; } ?>>Wirausaha</option>
                  <option value="Tidak bekerja/kuliah/wirausaha" <?php if ($merubah_alumni['kegiatan_setelah_lulus'] == 'Tidak bekerja/kuliah/wirausaha') {echo "selected"; } ?>>Tidak bekerja/kuliah/wirausaha</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Universitas</label>
                <input type="text" name="nama_universitas" class="form-control" value="<?php echo $merubah_alumni['nama_universitas']; ?>">
              </div>
              <div class="form-group">
                <label>Fakultas Universitas</label>
                <input type="text" name="fakultas_universitas" class="form-control" value="<?php echo $merubah_alumni['fakultas_universitas']; ?>">
              </div>
              <div class="form-group">
                <label>Jurusan Universitas</label>
                <input type="text" name="jurusan_universitas" class="form-control" value="<?php echo $merubah_alumni['jurusan_universitas']; ?>">
              </div>
              <div class="form-group">
                <label>Alamat Universitas</label>
                <textarea  name="alamat_universitas"  class="form-control" rows="3"><?php echo $merubah_alumni['alamat_universitas']; ?></textarea>
              </div>
              <div class="form-group">
                <label>No Tlp Univeristas</label>
                <input type="text" name="no_tlp_universitas" class="form-control" value="<?php echo $merubah_alumni['no_tlp_universitas']; ?>">
              </div>
            </div>

            <!-- Wirausaha dan Bekerja -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Nama Wirausaha</label>
                <input type="text" name="nama_wirausaha" class="form-control" value="<?php echo $merubah_alumni['nama_wirausaha']; ?>">
              </div>
              <div class="form-group">
                <label>Alamat Wirausaha</label>
                <textarea name="alamat_wirausaha" class="form-control" rows="3"><?php echo $merubah_alumni['alamat_wirausaha']; ?></textarea>
              </div>
              <div class="form-group">
                <label>No Hp Wirausaha</label>
                <input type="number" name="no_hp_wirausaha" class="form-control" value="<?php echo $merubah_alumni['no_hp_wirausaha']; ?>">
              </div>
              <div class="form-group">
                <label>Nama Instansi</label>
                <input type="text" name="nama_instansi" class="form-control" value="<?php echo $merubah_alumni['nama_instansi']; ?>">
              </div>
              <div class="form-group">
                <label>Tanggal Masuk Kerja</label>
                <div class="input-group">
                  <input type="text" class="form-control datepicker" name="tgl_mulai_kerja" autocomplete="off" value="<?php echo $merubah_alumni['tgl_mulai_kerja']; ?>" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal Selesai Kerja</label>
                <div class="input-group">
                  <input type="text" class="form-control datepicker" name="tgl_selesai_kerja" autocomplete="off" value="<?php echo $merubah_alumni['tgl_selesai_kerja']; ?>" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Alamat Instansi</label>
                <textarea name="alamat_instansi" class="form-control" rows="3"><?php echo $merubah_alumni['alamat_instansi']; ?></textarea>
              </div>
            </div>
          </div>

            <!-- */button simpan -->
            <div class="clearfix"></div>
            <div class="col-md-1">
                <a href="index.php?halaman=registrasi_alumni" class="btn btn-danger" onClick='return confirm("Apakah anda ingin membatalkannya?")' ><i class="fa fa-ban"></i>&nbsp; Batal</a>
            </div>
            <!-- button simpan -->
            <div class="col-md-4 col-md-offset-7 col-sm-4">
                <button class="btn btn-success" name="edit" style="float: right;"><i class="fa fa-save"></i>&nbsp; Simpan</button>
            </div>
        </form>
        <?php 
            if (isset($_POST['edit'])) 
            {
              $hasil = $regist_alumni_sklh->edit_regis_alumni($_POST['nis'],$_POST['nama_lengkap_alumni'],$_POST['jk_alumni'],$_POST['tempat_lahir_alumni'],$_POST['agama_alumni'],$_POST['alamat_alumni'],$_POST['no_hp_alumni'],$_POST['email_alumni'],$_POST['kegiatan_setelah_lulus'],$_POST['nama_universitas'],$_POST['fakultas_universitas'],$_POST['jurusan_universitas'],$_POST['alamat_universitas'],$_POST['no_tlp_universitas'],$_POST['nama_wirausaha'],$_POST['alamat_wirausaha'],$_POST['no_hp_wirausaha'],$_POST['nama_instansi'],$_POST['tgl_mulai_kerja'],$_POST['tgl_selesai_kerja'],$_POST['alamat_instansi'], $id_regis_alumni);

              /*if ($hasil=="sukses") 
              {*/
                echo "<script>alert('Data berhasil dirubah');</script>";
                echo "<script>location='index.php?halaman=registrasi_alumni';</script>";
              /*}
              else
              {*/
                /*echo "<script>alert('Data gagal di simpan');</script>";
                echo "<script>location='index.php?halaman=home';</script>";*/
              /*}*/
            }
        ?>
    </div>
</div>