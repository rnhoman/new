<div class="row" id="eventdanlowongan">
  <!-- EVENT -->
  <div class="col-md-6">
    <ul class="timeline">

      <?php 
      if (!isset($_GET) or empty($_GET['page'])) 
      {
        $_GET['page']=1;
        $batas = 3;
        $posisi = 0;
      }
      else
      {
        $batas = 3;
        $posisi = ($_GET['page']-1)*$batas;
      }
      ?>

      <?php 
      $tampil_event = $pengumuman_event->tampil_event($posisi, $batas); 
      ?>
      <!-- timeline time label -->
      <?php foreach ($tampil_event as $key => $value): ?>
        <li class="time-label">
          <span class="bg-red">
            <?php echo $value['waktu_posting_event']; ?>
          </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
          <!-- timeline icon -->
          <i class="fa fa-envelope bg-yellow"></i>
          <div class="timeline-item">

            <h3 class="timeline-header"><a href="index.php?halaman=lihatevent&id=<?php echo $value['id_event']; ?>"><?php echo $value['judul_event']; ?></a></h3>

            <div class="timeline-body">
              <?php echo substr(strip_tags($value['isi_konten_event']), 0, 200); ?>
            </div>

            <div class="timeline-footer">
              <a href="index.php?halaman=lihatevent&id=<?php echo $value['id_event']; ?>" class="btn btn-primary btn-xs">Selengkapnya</a>
            </div>
          </div>
        </li>
      <?php endforeach ?>
      <!-- END timeline item -->
    </ul>
    <nav>
      <?php 
      // menghitung seluruh data
      $tampil_event = $pengumuman_event->tampil_event(0, 9999999999); 
      $jumlahdata = count($tampil_event);

      // mendapatkan jumlah page rumusnya (jumlahpage/batas) lalu dibluatkan
      $jumlahpage = ceil($jumlahdata/3);
      ?>
      <ul class="pagination">
        <?php for ($i= 1; $i <= $jumlahpage; $i++): ?>
          <li class="<?php if ($_GET['page']==$i) {echo "active";} ?>"><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          
        <?php endfor ?>
        
      </ul>
    </nav>
  </div>

  <!-- LOWONGAN PEKERJAAN -->
  <div class="col-md-6">
    <ul class="timeline">
      <?php 
      if (!isset($_GET) or empty($_GET['hal'])) 
      {
        $_GET['hal']=1;
        $batas1 = 3;
        $posisi1 = 0;
      }
      else
      {
        $batas1 = 3;
        $posisi1 = ($_GET['hal']-1)*$batas1;
      }
      ?>

      <?php 
      $tampil_post_loker = $pengumuman_loker->tampil_loker($posisi1, $batas1); 
      ?>
      <!-- timeline time label -->
      <?php foreach ($tampil_post_loker as $key => $value): ?>
        <li class="time-label">
          <span class="bg-aqua">
            <?php echo $value['waktu_posting_loker']; ?>
          </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
          <!-- timeline icon -->
          <i class="fa fa-envelope bg-blue"></i>
          <div class="timeline-item">

            <h3 class="timeline-header"><a href="#"><?php echo $value['nama_pt_loker']; ?></a></h3>

            <div class="timeline-body">
              <?php echo substr(strip_tags($value['isi_konten_loker']), 0, 200); ?>
            </div>

            <div class="timeline-footer">
              <?php $sekarang = strtotime(date("Y-m-d H:i:s")); ?>
              <?php $jatuh_tempo = strtotime($value['jatuh_tempo_loker']); ?>
              <?php if ($sekarang>=$jatuh_tempo): ?>
                <a class="btn btn-primary btn-xs" disabled>Selengkapnya</a>
              <?php else: ?>
                <a href="index.php?halaman=lihatloker&id=<?php echo $value['id_loker']; ?>" class="btn btn-primary btn-xs">Selengkapnya</a>
              <?php endif ?>
            </div>
          </div>
        </li>
      <?php endforeach ?>
      <!-- END timeline item -->
    </ul>

    <nav>
      <?php 
      // menghitung seluruh data
      $tampil_post_loker = $pengumuman_loker->tampil_loker(0, 9999999999); 
      $jumlahdata1 = count($tampil_post_loker);

      // mendapatkan jumlah page rumusnya (jumlahpage/batas) lalu dibluatkan
      $jumlahpage1 = ceil($jumlahdata1/3);
      ?>
      <ul class="pagination">
        <?php for ($i= 1; $i <= $jumlahpage1; $i++): ?>
          <li class="<?php if ($_GET['hal']==$i) {echo "active";} ?>"><a href="index.php?hal=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          
        <?php endfor ?>
        
      </ul>
    </nav>
  </div>
</div>



<?php 
$id_data_siswa = $_SESSION['alumni']['id_data_siswa'];
$da = $siswa_sekolah->ambil_siswa($id_data_siswa);

// untuk melengkapi data
$nis = $_SESSION['alumni']['nis'];
$nama_lengkap = $_SESSION['alumni']['nama_lengkap'];
$jk_siswa = $_SESSION['alumni']['jk_siswa'];
$tempat_lahir_siswa = $_SESSION['alumni']['tempat_lahir_siswa'];
$tgl_lahir_siswa = $_SESSION['alumni']['tgl_lahir_siswa'];
$agama_siswa = $_SESSION['alumni']['agama_siswa'];
$alamat_siswa = $_SESSION['alumni']['alamat_siswa'];
$no_hp = $_SESSION['alumni']['no_hp'];
$email = $_SESSION['alumni']['email'];

?>

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

<div class="modal fade" tabindex="-1" role="dialog" id="modal-registrasi-alumni">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <form method="POST">
        <div class="modal-body">

          <div class="row">


            <!-- Data Diri Alumni -->
            <div class="col-md-4">
              <div class="form-group">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control" value="<?php echo $nis; ?>" readonly>
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap_alumni" class="form-control" value="<?php echo $nama_lengkap; ?>">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk_alumni">
                  <option value="-" <?php if ($jk_siswa=="-") {echo "selected";} ?>>-Jenis Kelamin-</option>
                  <option value="Laki-Laki" <?php if ($jk_siswa=="Laki-Laki") {echo "selected";} ?>>Laki-Laki</option>
                  <option value="Perempuan" <?php if ($jk_siswa=="Perempuan") {echo "selected";} ?>>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tempat/Tanggal/Lahir</label>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" name="tempat_lahir_alumni" class="form-control" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir_siswa ?>">
                  </div>
                  <div class="col-xs-6">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control datepicker" name="tgl_lahir_alumni" value="<?php echo $tgl_lahir_siswa ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama_alumni">
                  <option value="-">-Pilih Agama-</option>
                  <option value="Islam" <?php if($agama_siswa=='Islam') {echo "selected";} ?>>Islam</option>
                  <option value="Kristen" <?php if($agama_siswa=='Kristen') {echo "selected";} ?>>Kristen</option>
                  <option value="Katholik" <?php if($agama_siswa=='Katholik') {echo "selected";} ?>>Katholik</option>
                  <option value="Hindu" <?php if($agama_siswa=='Hindu') {echo "selected";} ?>>Hindu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat Saat Ini</label>
                <textarea class="form-control" rows="3" name="alamat_alumni"><?php echo $alamat_siswa; ?></textarea>
              </div>
              <div class="form-group">
                <label>No Hp Alumni</label>
                <input type="number" name="no_hp_alumni" class="form-control" value="<?php echo $no_hp; ?>">
              </div>
            </div>

            <!-- Universitas -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email_alumni" class="form-control" value="<?php echo $email; ?>" readonly>
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

        </div>
        <div class="modal-footer">
          <a href="index.php" class="btn btn-danger" onClick='return confirm("Apakah anda ingin membatalkannya?")' ><i class="fa fa-ban"></i>&nbsp; Batal</a>
          <button class="btn btn-success" name="simpan" style="float: right;"><i class="fa fa-save"></i>&nbsp; Simpan</button>


        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">

  $(document).ready(function() {
    <?php 

    $dr = $regist_alumni_sklh->ambil_regis_alumni_nis($nis);
    if (empty($dr['nis']) or empty($dr['kegiatan_setelah_lulus'])) 
    {
      ?>
      $("#eventdanlowongan").hide();
      $("#modal-registrasi-alumni").modal();
      <?php
    }

    ?>
  })
</script>
