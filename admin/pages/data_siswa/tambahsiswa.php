<div class="callout callout-warning">
  <h3><i class="fa fa-bullhorn"></i>&nbsp; HARAP DIPERHATIKAN</h3>
  <p style="text-align: justify; font-size: 20px;">Ketentuan pengisian data siswa/siswi kelas XII SMK Negeri 1 Jogonalan Klaten dapat diperhatikan sebagai berikut</p>
  <ul style="font-size: 16px;">
      <li>Isi data sesuai dengan biodata anda saat masih sekolah di SMK Negeri 1 Jogonalan Klaten</li>
      <li>Berikan tanda " - " atau plus apabila anda tidak tahu.</li>
      <li>Data anda sangat kami butuhkan, jadi isi lah dengan baik dan benar</li>
  </ul>
</div>
<!-- row -->
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
                            <input type="text" name="nisn" class="form-control" value="<?php ['nisn']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?php ['nama_lengkap']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input type="text" name="nama_panggilan" class="form-control" value="<?php ['nama_panggilan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jk_siswa">
                                <option value="">-Jenis Kelamin-</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat/Tanggal/Lahir</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" name="tempat_lahir_siswa" class="form-control" placeholder="Tempat Lahir" value="<?php ['tempat_lahir_siswa']; ?>">
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
                            <input type="text" name="umur_siswa" class="form-control" value="<?php ['umur_siswa']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama_siswa">
                                <option value="">-Pilih Agama-</option>
                                <option value="Islam">Islam</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan_siswa" class="form-control" value="<?php ['kewarganegaraan_siswa']; ?>">
                            <p class="help-block">Example : Indonesia</p>
                        </div>
                        <div class="form-group">
                            <label>Anak Ke-</label>
                            <input type="text" name="anakke_siswa" class="form-control" value="<?php ['anakke_siswa']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Saudara</label>
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>Kandung</label>
                                    <input type="text" name="jmlh_saudara_kndng" class="form-control" placeholder="Kandung" value="<?php ['jmlh_saudara_kndng']; ?>">
                                </div>
                                <div class="col-xs-4">
                                    <label>Tiri</label>
                                    <input type="text" name="jmlh_saudara_tiri" class="form-control" placeholder="Tiri" value="<?php ['jmlh_saudara_tiri']; ?>">
                                </div>
                                <div class="col-xs-4">
                                    <label>Angkat</label>
                                    <input type="text" name="jmlh_saudara_angkat" class="form-control" placeholder="Angkat" value="<?php ['jmlh_saudara_angkat']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jarak form tengah -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Anak Yatim</label>
                            <select class="form-control" name="anak_siswa">
                                <option value="">-Pilih Kondisi Siswa-</option>
                                <option value="Yatim">Yatim</option>
                                <option value="Piatu">Piatu</option>
                                <option value="Yatim Piatu">Yatim Piatu</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bahasa Sehari-hari</label>
                            <input type="text" name="bhsa_sehari" class="form-control" placeholder="Bahasa Sehari-hari" value="<?php ['bhsa_sehari']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap Saat ini</label>
                            <textarea class="form-control" name="alamat_siswa" rows="5"><?php ['alamat_siswa']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon/handphone</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="number" name="no_hp" class="form-control" value="<?php ['no_hp']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Saat Ini Tinggal Bersama</label>
                            <input type="text" name="tinggal_bersama" class="form-control" value="<?php ['tinggal_bersama']; ?>">
                            <p class="help-block">example : Orang Tua</p>
                        </div>
                        <div class="form-group">
                            <label>Jarak Rumah dengan Tempat TInggal</label>
                            <input type="text" name="jarak_rumah" class="form-control" value="<?php ['jarak_rumah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <input type="text" name="golongan_darah" class="form-control" value="<?php ['golongan_darah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Penyakit yang pernah diderita</label>
                            <input type="text" name="penyakit_siswa" class="form-control" value="<?php ['penyakit_siswa']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Kelainan Jasmani</label>
                            <input type="text" name="kelainan_jasmani" class="form-control" value="<?php ['kelainan_jasmani']; ?>">
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
                                    <input type="text" name="tinggi_badan" class="form-control" placeholder="Tinggi Cm" value="<?php ['tinggi_badan']; ?>">
                                </div>
                                <div class="col-xs-4">
                                    <label>Berat Badan</label>
                                    <input type="text" name="berat_badan" class="form-control" placeholder="Berat Kg" value="<?php ['berat_badan']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lulusan Dari Sekolah</label>
                            <input type="text" name="lulusan_dari" class="form-control" value="<?php ['lulusan_dari']; ?>">
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
                                    <input type="text" name="no_ijazah" class="form-control" value="<?php ['no_ijazah']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal dan Nomor STL</label>
                            <input type="text" name="tgl_no_stl" class="form-control" value="<?php ['tgl_no_stl']; ?>" >
                        </div>
                        <div class="form-group">
                            <label>Lama Belajar</label>
                            <input type="text" name="lama_belajar" class="form-control" value="<?php ['lama_belajar']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Pindah Sekolah</label>
                            <input type="text" name="pindah_sekolah" class="form-control" value="<?php ['pindah_sekolah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Diterima ditingkat</label>
                            <input type="text" name="terima_ditingkat" class="form-control" value="<?php ['terima_ditingkat']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alasan Pindah Sekolah</label>
                            <input type="text" name="alasan_pindah" class="form-control" value="<?php ['alasan_pindah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Bidang Study Keahlian</label>
                            <select class="form-control" name="bidang_study">
                                <option  value="">-Bidang Study-</option>
                                <option value="Teknik Informasi dan Komunikasi">Teknik Informasi dan Komunikasi</option>
                                <option value="Bisnis dan Manajemen">Bisnis dan Manajemen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kompetensi Keahlian</label>
                            <select class="form-control" name="kompetensi_keahlian">
                                <option value="">-Kompetensi Keahlian-</option>
                                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Pemasaran">Pemasaran</option>
                                <option value="Multimedia">Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Masuk SMK Negeri 1 Jogonalan Klaten</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tgl_masuk_sekolah" class="form-control datepicker" name="tgl_masuk_sekolah">
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
                        <button class="btn btn-success" name="edit" style="float: right;"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                    </div>
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $hasil = $siswa_sekolah->simpan_siswa($_POST['nis'],$_POST['nisn'],$_POST['nama_lengkap'],$_POST['nama_panggilan'],$_POST['jk_siswa'],$_POST['tempat_lahir_siswa'],$_POST['tgl_lahir_siswa'],$_POST['umur_siswa'],$_POST['agama_siswa'],$_POST['kewarganegaraan_siswa'],$_POST['anakke_siswa'],$_POST['jmlh_saudara_angkat'],$_POST['jmlh_saudara_tiri'],$_POST['jmlh_saudara_angkat'],$_POST['anak_siswa'],$_POST['bhsa_sehari'],$_POST['alamat_siswa'],$_POST['no_hp'],$_POST['tinggal_bersama'],$_POST['jarak_rumah'],$_POST['golongan_darah'],$_POST['penyakit_siswa'],$_POST['kelainan_jasmani'],$_POST['tinggi_badan'],$_POST['berat_badan'],$_POST['lulusan_dari'],$_POST['tgl_ijazah'],$_POST['no_ijazah'],$_POST['tgl_no_stl'],$_POST['lama_belajar'],$_POST['pindah_sekolah'],$_POST['terima_ditingkat'],$_POST['alasan_pindah'],$_POST['bidang_study'],$_POST['kompetensi_keahlian'],$_POST['tgl_masuk_sekolah']);

                    echo "<script>alert('Data berhasil disimpan');</script>";
                    echo "<script>location='index.php?halaman=data_siswa';</script>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>