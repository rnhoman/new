<?php 
  // mendapatkan nis yg login dari session
$nis = $_GET['id'];
$data_alumni = $alumni->ambil_biodata_alumni($nis);
$data_orang_tua_alumni = $alumni->ambil_orang_tua_alumni($nis);
$data_wali_alumni = $alumni->ambil_wali_alumni($nis);
$data_perkembangan_alumni = $alumni->ambil_perkembangan_alumni($nis);
$data_registrasi_alumni = $alumni->ambil_data_alumni($nis);
?>

<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <!-- <img class="profile-user-img img-responsive img-circle" src="../../../dist/img/user(1).png" alt="User profile picture"> -->

        <h3 class="profile-username text-center"><?php echo $data_alumni['nama_lengkap']; ?></h3>

        <p class="text-muted text-center"><?php echo $data_alumni['kompetensi_keahlian']; ?></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>NIS</b> <a class="pull-right"><?php echo $data_alumni['nis']; ?></a>
          </li>
          <li class="list-group-item">
            <b>NISN</b> <a class="pull-right"><?php echo $data_alumni['nisn']; ?></a>
          </li>
          <li class="list-group-item">
            <b>Jenis Kelamin</b> <a class="pull-right"><?php echo $data_alumni['jk_siswa']; ?></a>
          </li>
          <li class="list-group-item">
            <b>Tempat/Tgl/Lahir</b> <a class="pull-right"><?php echo $data_alumni['tempat_lahir_siswa'].", ".date('d-M-Y', strtotime($data_alumni['tgl_lahir_siswa'])); ?></a>
          </li>
          <li class="list-group-item">
            <b>No Hp</b> <a class="pull-right"><?php echo $data_alumni['no_hp'];?></a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="pull-right"><?php echo $data_alumni['email'];?></a>
          </li>
        </ul>

        <!-- <a href="index.php?halaman=editdatasiswa" class="btn btn-success btn-block"><b>UPDATE</b></a> -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
    <!-- <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">About Me</h3>
      </div>
      
      <div class="box-body">
        <strong><i class="fa fa-book margin-r-5"></i> Kompetensi Keahlian</strong>

        <p class="text-muted">
          <?php echo $data_alumni['kompetensi_keahlian']; ?>
        </p>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

        <p class="text-muted"><?php echo $data_alumni['alamat_siswa']; ?></p>

        <hr>

        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

        <p>
          <span class="label label-danger">UI Design</span>
          <span class="label label-success">Coding</span>
          <span class="label label-info">Javascript</span>
          <span class="label label-warning">PHP</span>
          <span class="label label-primary">Node.js</span>
        </p>

        <hr>

        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
      </div>
      
    </div> -->
    
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <!-- <li class="active"><a href="#biodata" data-toggle="tab">Biodata</a></li> -->
        <li class="active"><a href="#biodata" data-toggle="tab">Biodata</a></li>
        <li><a href="#orangtua" data-toggle="tab">Orang Tua</a></li>
        <li><a href="#wali" data-toggle="tab">Wali</a></li>
        <li><a href="#perkembangan" data-toggle="tab">Perkembangan</a></li>
      </ul>
      <div class="tab-content">
        <!-- <div class="active tab-pane" id="biodata">
          
      </div> -->

      <!-- /.Biodata -->
      <div class="tab-pane active" id="biodata">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <td><?php echo $data_alumni['nama_lengkap']; ?></td>
                </tr>
                <tr>
                  <th>Tempat/Tgl/Lahir</th>
                  <td><?php echo $data_alumni['tempat_lahir_siswa'].", ".date('d-M-Y', strtotime($data_alumni['tgl_lahir_siswa'])); ?></td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td><?php echo $data_alumni['jk_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <td><?php echo $data_alumni['agama_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Kewarganegaraan</th>
                  <td><?php echo $data_alumni['kewarganegaraan_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td><?php echo $data_alumni['alamat_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Nomor Hp</th>
                  <td><?php echo $data_alumni['no_hp']; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $data_alumni['email']; ?></td>
                </tr>
                <tr>
                  <th>Status Sekolah</th>
                  <td><?php echo $data_alumni['status_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Kegiatan Setelah Lulus</th>
                  <td><?php echo $data_registrasi_alumni['kegiatan_setelah_lulus']; ?></td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
        <a href="index.php?halaman=editbiodata" class="btn btn-success">UPDATE</a>
      </div>

      <!-- /.Orang Tua -->
      <div class="tab-pane <?php if ($_GET['tab-pane']=="orangtua") {echo "active";} ?>" id="orangtua">
        <div class="row">
          <div class="col-md-6">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama Ayah</th>
                  <td><?php echo $data_orang_tua_alumni['nama_ayah_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Tempat/Tgl/Lahir</th>
                  <td><?php echo $data_orang_tua_alumni['tempat_lahir_ayah'].",".$data_orang_tua_alumni['tgl_lahir_ayah']; ?></td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <td><?php echo $data_orang_tua_alumni['agama_ayah']; ?></td>
                </tr>
                <tr>
                  <th>Kewarganegaraan</th>
                  <td><?php echo $data_orang_tua_alumni['kewarganegaraan_ayah']; ?></td>
                </tr>
                <tr>
                  <th>Pendidikan</th>
                  <td><?php echo $data_orang_tua_alumni['pendidikan_ayah']; ?></td>
                </tr>
                <tr>
                  <th>Pekerjaan</th>
                  <td><?php echo $data_orang_tua_alumni['pekerjaan_ayah']; ?></td>
                </tr>
              </thead>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama Ibu</th>
                  <td><?php echo $data_orang_tua_alumni['nama_ibu_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Tempat/Tgl/Lahir</th>
                  <td><?php echo $data_orang_tua_alumni['tempat_lahir_ibu'].", ".$data_orang_tua_alumni['tgl_lahir_ibu']; ?></td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <td><?php echo $data_orang_tua_alumni['agama_ibu']; ?></td>
                </tr>
                <tr>
                  <th>Kewarganegaraan</th>
                  <td><?php echo $data_orang_tua_alumni['kewarganegaraan_ibu']; ?></td>
                </tr>
                <tr>
                  <th>Pendidikan</th>
                  <td><?php echo $data_orang_tua_alumni['pendidikan_ibu']; ?></td>
                </tr>
                <tr>
                  <th>Pekerjaan</th>
                  <td><?php echo $data_orang_tua_alumni['pekerjaan_ibu']; ?></td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <a href="index.php?halaman=editorangtua" class="btn btn-success">UPDATE</a>
      </div>
      <!-- /.tab-pane -->

      <!-- /.Wali -->
      <div class="tab-pane <?php if ($_GET['tab-pane']=="wali") {echo "active";} ?>" id="wali">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama Wali Siswa</th>
                  <td><?php echo $data_wali_alumni['nama_wali_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Tempat/Tgl/Lahir</th>
                  <td><?php echo $data_wali_alumni['tempat_lahir_wali_siswa'].",".$data_wali_alumni['tgl_lahir_wali_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <td><?php echo $data_wali_alumni['agama_wali_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Kewarganegaraan</th>
                  <td><?php echo $data_wali_alumni['kewarganegaraan_wali_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Pendidikan</th>
                  <td><?php echo $data_wali_alumni['pendidikan_wali_siswa']; ?></td>
                </tr>
                <tr>
                  <th>Pekerjaan</th>
                  <td><?php echo $data_wali_alumni['pekerjaan_wali_siswa']; ?></td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <a href="index.php?halaman=editwali" class="btn btn-success">UPDATE</a>
      </div>

      <!-- /.Perkembangan -->
      <div class="tab-pane <?php if ($_GET['tab-pane']=="perkembangan") {echo "active";} ?>" id="perkembangan">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Kesenian</th>
                  <td><?php echo $data_perkembangan_alumni['kesenian']; ?></td>
                </tr>
                <tr>
                  <th>Olahraga</th>
                  <td><?php echo $data_perkembangan_alumni['olahraga']; ?></td>
                </tr>
                <tr>
                  <th>organisasi</th>
                  <td><?php echo $data_perkembangan_alumni['organisasi']; ?></td>
                </tr>
                <tr>
                  <th>Hobby</th>
                  <td><?php echo $data_perkembangan_alumni['hobi_lain']; ?></td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <a href="index.php?halaman=editperkembangan" class="btn btn-success">UPDATE</a>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->


<!-- Modal Biodata -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="callout callout-warning">
          <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-bullhorn"></i>&nbsp; HARAP DIPERHATIKAN</h3>
            <p style="text-align: justify; font-size: 20px;">Ketentuan pengisian data siswa/siswi kelas XII SMK Negeri 1 Jogonalan Klaten dapat diperhatikan sebagai berikut</p>
            <ul style="font-size: 16px;">
              <li>Isi data sesuai dengan biodata anda saat masih sekolah di SMK Negeri 1 Jogonalan Klaten</li>
              <li>Berikan tanda " - " atau plus apabila anda tidak tahu.</li>
              <li>Data anda sangat kami butuhkan, jadi isi lah dengan baik dan benar</li>
            </ul></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-4 col-sm-offset-0">
            <div class="box box-info">
              <div class="box-header">
                <h2 style="text-align: center;">Biodata Siswa/Siswi SMK N 1 Jogonalan Klaten</h2>
              </div>
              <div class="box-body">
                <!-- Form Tambah Siswa -->
                <form method="POST" enctype="multipart/form-data">
                  <!-- Jarak form kiri -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Nomor Induk Siswa (NIS)</label>
                      <input type="text" name="nis" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nomor Induk Siswa Nasional (NISN)</label>
                      <input type="text" name="nisn" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nama Panggilan</label>
                      <input type="text" name="nama_panggilan" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk_siswa">
                        <option>-Jenis Kelamin-</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tempat/Tanggal/Lahir</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <input type="text" name="tempat_lahir_siswa" class="form-control" placeholder="Tempat Lahir">
                        </div>
                        <div class="col-xs-6">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control datepicker" name="tgl_lahir_siswa">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Umur Siswa</label>
                      <input type="text" name="umur_siswa" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama_siswa">
                        <option>-Pilih Agama-</option>
                        <option>Islam</option>
                        <option>Katholik</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kewarganegaraan</label>
                      <input type="text" name="kewarganegaraan_siswa" class="form-control">
                      <p class="help-block">Example : Indonesia</p>
                    </div>
                    <div class="form-group">
                      <label>Anak Ke-</label>
                      <input type="text" name="anakke_siswa" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Saudara</label>
                      <div class="row">
                        <div class="col-xs-4">
                          <label>Kandung</label>
                          <input type="text" name="jmlh_saudara_kndng" class="form-control" placeholder="Kandung">
                        </div>
                        <div class="col-xs-4">
                          <label>Tiri</label>
                          <input type="text" name="jmlh_saudara_tiri" class="form-control" placeholder="Tiri">
                        </div>
                        <div class="col-xs-4">
                          <label>Angkat</label>
                          <input type="text" name="jmlh_saudara_angkat" class="form-control" placeholder="Angkat">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Jarak form tengah -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Anak Yatim</label>
                      <div>
                        <label>
                          <input type="radio" name="anak_siswa" class="minimal" value="yatim">
                          &nbsp; Yatim
                        </label><br>
                        <label>
                          <input type="radio" name="anak_siswa" class="minimal" value="piatu">
                          &nbsp; Piatu
                        </label><br>
                        <label>
                          <input type="radio" name="anak_siswa" class="minimal" value="yatim piatu">
                          &nbsp; Yatim Piatu
                        </label><br>
                        <label>
                          <input type="radio" name="anak_siswa" class="minimal" value="tidak">
                          &nbsp; Tidak
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Bahasa Sehari-hari</label>
                      <input type="text" name="bhsa_sehari" class="form-control" placeholder="Bahasa Sehari-hari">
                    </div>
                    <div class="form-group">
                      <label>Alamat Lengkap Saat ini</label>
                      <textarea class="form-control" name="alamat_siswa" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Nomor Telepon/handphone</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="number" name="no_hp" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Saat Ini Tinggal Bersama</label>
                      <input type="text" name="tinggal_bersama" class="form-control">
                      <p class="help-block">example : Orang Tua</p>
                    </div>
                    <div>
                      <label>Jarak Rumah dengan Tempat TInggal</label>
                      <input type="text" name="jarak_rumah" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Golongan Darah</label>
                      <input type="text" name="golongan_darah" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Penyakit yang pernah diderita</label>
                      <input type="text" name="penyakit_siswa" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Kelainan Jasmani</label>
                      <input type="text" name="kelainan_jasmani" class="form-control">
                      <p class="help-block">Example : Cacat</p>
                    </div>
                  </div>
                  <!-- Jarak form kanan -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Tinggi dan Berat Badan</label>
                      <div class="row">
                        <div class="col-xs-4">
                          <label>Tinggi Badan</label>
                          <input type="text" name="tinggi_badan" class="form-control" placeholder="Tinggi Cm">
                        </div>
                        <div class="col-xs-4">
                          <label>Berat Badan</label>
                          <input type="text" name="berat_badan" class="form-control" placeholder="Berat Kg">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Lulusan Dari Sekolah</label>
                      <input type="text" name="lulusan_dari" class="form-control">
                      <p class="help-block">Example : SMP Negeri 1 Jetis</p>
                    </div>
                    <div class="form-group">
                      <label>Tanggal dan Nomor Ijazah</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <label>Tgl Ijazah</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="tgl_ijazah" class="form-control datepicker" name="tgl_ijazah">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <label>No Ijazah</label>
                          <input type="text" name="no_ijazah" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Tanggal dan Nomor STL</label>
                      <input type="text" name="tgl_no_stl" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label>Lama Belajar</label>
                      <input type="text" name="lama_belajar" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Pindah Sekolah</label>
                      <input type="text" name="pindah_sekolah" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Diterima ditingkat</label>
                      <input type="text" name="terima_ditingkat" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alasan Pindah Sekolah</label>
                      <input type="text" name="alasan_pindah" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Bidang Study Keahlian</label>
                      <select class="form-control" name="bidang_study">
                        <option>-Bidang Study-</option>
                        <option>Teknik Komputer dan Jaringan</option>
                        <option>Administrasi Perkantoran</option>
                        <option>Akuntansi</option>
                        <option>Marketing/Pemasaran</option>
                        <option>Multimedia</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kompetensi Keahlian</label>
                      <select class="form-control" name="kompetensi_keahlian">
                        <option>-Kompetensi Keahlian-</option>
                        <option>Teknik Komputer dan Jaringan</option>
                        <option>Administrasi Perkantoran</option>
                        <option>Akuntansi</option>
                        <option>Marketing/Pemasaran</option>
                        <option>Multimedia</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Masuk SMK Negeri 1 Jogonalan Klaten</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_masuk" class="form-control datepicker" name="tgl_masuk_sekolah">
                      </div>
                    </div>
                  </div>
                  <!-- button danger -->
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
                  $hasil = $siswa_sekolah->simpan_siswa($_POST['nis'],$_POST['nisn'],$_POST['nama_lengkap'],$_POST['nama_panggilan'],$_POST['$jk_siswa'],$_POST['$tempat_lahir_siswa'],$_POST['tgl_lahir_siswa'],$_POST['umur_siswa'],$_POST['agama_siswa'],$_POST['kewarganegaraan_siswa'],$_POST['anakke_siswa'],$_POST['jmlh_saudara_angkat'],$_POST['jmlh_saudara_tiri'],$_POST['jmlh_saudara_angkat'],$_POST['anak_siswa'],$_POST['bhsa_sehari'],$_POST['alamat_siswa'],$_POST['no_hp'],$_POST['tinggal_bersama'],$_POST['jarak_rumah'],$_POST['golongan_darah'],$_POST['penyakit_siswa'],$_POST['kelainan_jasmani'],$_POST['tinggi_badan'],$_POST['berat_badan'],$_POST['lulusan_dari'],$_POST['tgl_ijazah'],$_POST['no_ijazah'],$_POST['tgl_no_stl'],$_POST['lama_belajar'],$_POST['pindah_sekolah'],$_POST['terima_ditingkat'],$_POST['alasan_pindah'],$_POST['bidang_study'],$_POST['kompetensi_keahlian'],$_POST['tgl_masuk_sekolah']);

                  echo "<script>alert('Data berhasil disimpan');</script>";
                  echo "<script>location='index.php?halaman=data_siswa';</script>";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
