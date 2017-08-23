<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tambah Alumni</h2>
    </div>
    <div class="box-body">
        <form method="POST" enctype="multipart/form-data">
            <!-- Data Diri Alumni -->
            <div class="col-md-4">
              <div class="form-group">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap_alumni" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk_alumni">
                  <option value="">-Jenis Kelamin-</option>
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tempat/Tanggal/Lahir</label>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" name="tempat_lahir_alumni" class="form-control" placeholder="Tempat Lahir">
                  </div>
                  <div class="col-xs-6">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control datepicker" name="tgl_lahir_alumni">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama_alumni">
                  <option value="">-Pilih Agama-</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Khatolik">Khatolik</option>
                  <option value="Hindu">Hindu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat Saat Ini</label>
                <textarea class="form-control" rows="3" name="alamat_alumni"></textarea>
              </div>
              <div class="form-group">
                <label>No Hp Alumni</label>
                <input type="number" name="no_hp_alumni" class="form-control">
              </div>
            </div>

            <!-- Universitas -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email_alumni" class="form-control">
              </div>
              <div class="form-group">
                <label>Kegiatan Setelah Lulus</label>
                <select class="form-control" name="kegiatan_setelah_lulus" required>
                  <option value="">-Kegiatan Setelah Lulus-</option>
                  <option value="Kuliah">Kuliah</option>
                  <option value="Bekerja">Bekerja</option>
                  <option value="Wirausaha">Wirausaha</option>
                  <option value="Tidak bekerja/kuliah/wirausaha">Tidak bekerja/kuliah/wirausaha</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Universitas</label>
                <input type="text" name="nama_universitas" class="form-control">
              </div>
              <div class="form-group">
                <label>Fakultas Universitas</label>
                <input type="text" name="fakultas_universitas" class="form-control">
              </div>
              <div class="form-group">
                <label>Jurusan Universitas</label>
                <input type="text" name="jurusan_universitas" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat Universitas</label>
                <textarea  name="alamat_universitas"  class="form-control" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label>No Tlp Univeristas</label>
                <input type="text" name="no_tlp_universitas" class="form-control">
              </div>
            </div>

            <!-- Wirausaha dan Bekerja -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Nama Wirausaha</label>
                <input type="text" name="nama_wirausaha" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat Wirausaha</label>
                <textarea name="alamat_wirausaha" class="form-control" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label>No Hp Wirausaha</label>
                <input type="number" name="no_hp_wirausaha" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Instansi</label>
                <input type="text" name="nama_instansi" class="form-control">
              </div>
              <div class="form-group">
                <label>Tanggal Masuk Kerja</label>
                <div class="input-group">
                  <input type="text" class="form-control datepicker" name="tgl_mulai_kerja" autocomplete="off" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal Selesai Kerja</label>
                <div class="input-group">
                  <input type="text" class="form-control datepicker" name="tgl_selesai_kerja" autocomplete="off" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Alamat Instansi</label>
                <textarea name="alamat_instansi" class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>

            <!-- */button simpan -->
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
              $hasil = $regist_alumni_sklh->simpan_regis_alumni($_POST['nis'],$_POST['nama_lengkap_alumni'],$_POST['jk_alumni'],$_POST['tempat_lahir_alumni'],$_POST['agama_alumni'],$_POST['alamat_alumni'],$_POST['no_hp_alumni'],$_POST['email_alumni'],$_POST['kegiatan_setelah_lulus'],$_POST['nama_universitas'],$_POST['fakultas_universitas'],$_POST['jurusan_universitas'],$_POST['alamat_universitas'],$_POST['no_tlp_universitas'],$_POST['nama_wirausaha'],$_POST['alamat_wirausaha'],$_POST['no_hp_wirausaha'],$_POST['nama_instansi'],$_POST['tgl_mulai_kerja'],$_POST['tgl_selesai_kerja'],$_POST['alamat_instansi']);

              if ($hasil=="sukses") 
              {
                echo "<script>alert('Data berhasil di simpan');</script>";
                echo "<script>location='index.php';</script>";
              }
              else
              {
                echo "<script>alert('Data gagal di simpan');</script>";
                echo "<script>location='index.php?halaman=home';</script>";
              }
            }
        ?>
    </div>
</div>