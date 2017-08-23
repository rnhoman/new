<?php 
$id_data_siswa = $_GET['id'];
$merubah_data_siswa = $siswa_sekolah->ambil_siswa($id_data_siswa);
?>
<!-- row -->
<!-- row -->
<div class="row">
    <div class="col-md-12 col-sm-4 col-sm-offset-0">
        <div class="box box-info">
            <div class="box-header">
                <h2 class="box-title"></h2>
            </div>
            <div class="box-body">
                <!-- Form Tambah Siswa -->
                <form method="POST" enctype="multipart/form-data">
                    <!-- Jarak form kiri -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nomor Induk Siswa (NIS)</label>
                            <input type="text" name="nis" class="form-control" value="<?php echo $merubah_data_siswa['nis']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nomor Induk Siswa Nasional (NISN)</label>
                            <input type="text" name="nisn" class="form-control" value="<?php echo $merubah_data_siswa['nisn']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $merubah_data_siswa['nama_lengkap']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input type="text" name="nama_panggilan" class="form-control" value="<?php echo $merubah_data_siswa['nama_panggilan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jk_siswa">
                                <option value="-" <?php if($merubah_data_siswa['jk_siswa'] == '-') { echo "selected"; }?>>-Jenis Kelamin-</option>
                                <option value="Laki-Laki" <?php if($merubah_data_siswa['jk_siswa'] == 'Laki-Laki') { echo "selected"; }?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if($merubah_data_siswa['jk_siswa'] == 'Perempuan') { echo "selected"; }?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat/Tanggal/Lahir</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" name="tempat_lahir_siswa" class="form-control" placeholder="Tempat Lahir" value="<?php echo $merubah_data_siswa['tempat_lahir_siswa']; ?>">
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control datepicker" name="tgl_lahir_siswa" value="<?php echo date('Y-m-d', strtotime($merubah_data_siswa['tgl_lahir_siswa'])); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama_siswa">
                                <option value="-" <?php if($merubah_data_siswa['agama_siswa'] == '-') { echo "selected"; }?>>-Pilih Agama-</option>
                                <option value="Islam" <?php if($merubah_data_siswa['agama_siswa'] == 'Islam') { echo "selected"; }?>>Islam</option>
                                <option value="Katholik" <?php if($merubah_data_siswa['agama_siswa'] == 'Katholik') { echo "selected"; }?>>Katholik</option>
                                <option value="Kristen" <?php if($merubah_data_siswa['agama_siswa'] == 'Kristen') { echo "selected"; }?>>Kristen</option>
                                <option value="Hindu" <?php if($merubah_data_siswa['agama_siswa'] == 'Hindu') { echo "selected"; }?>>Hindu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan_siswa" class="form-control" value="<?php echo $merubah_data_siswa['kewarganegaraan_siswa']; ?>">
                            <p class="help-block">Example : Indonesia</p>
                        </div>
                        <div class="form-group">
                            <label>Anak Ke-</label>
                            <input type="text" name="anakke_siswa" class="form-control" value="<?php echo $merubah_data_siswa['anakke_siswa']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Saudara</label>
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>Kandung</label>
                                    <input type="text" name="jmlh_saudara_kndng" class="form-control" placeholder="Kandung" value="<?php echo $merubah_data_siswa['jmlh_saudara_kndng']; ?>">
                                </div>
                                <div class="col-xs-4">
                                    <label>Tiri</label>
                                    <input type="text" name="jmlh_saudara_tiri" class="form-control" placeholder="Tiri" value="<?php echo $merubah_data_siswa['jmlh_saudara_tiri']; ?>">
                                </div>
                                <div class="col-xs-4">
                                    <label>Angkat</label>
                                    <input type="text" name="jmlh_saudara_angkat" class="form-control" placeholder="Angkat" value="<?php echo $merubah_data_siswa['jmlh_saudara_angkat']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jarak form tengah -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Anak Yatim</label>
                            <select class="form-control" name="anak_siswa">
                                <option value="-" <?php if($merubah_data_siswa['anak_siswa'] == '-') { echo "selected"; }?>>-Pilih Kondisi Siswa-</option>
                                <option value="Yatim" <?php if($merubah_data_siswa['anak_siswa'] == 'Yatim') { echo "selected"; }?>>Yatim</option>
                                <option value="Piatu" <?php if($merubah_data_siswa['anak_siswa'] == 'Piatu') { echo "selected"; }?>>Piatu</option>
                                <option value="Yatim Piatu" <?php if($merubah_data_siswa['anak_siswa'] == 'Yatim Piatu') { echo "selected"; }?>>Yatim Piatu</option>
                                <option value="Tidak" <?php if($merubah_data_siswa['anak_siswa'] == 'Tidak') { echo "selected"; }?>>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bahasa Sehari-hari</label>
                            <input type="text" name="bhsa_sehari" class="form-control" placeholder="Bahasa Sehari-hari" value="<?php echo $merubah_data_siswa['bhsa_sehari']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap Saat ini</label>
                            <textarea class="form-control" name="alamat_siswa" rows="5"><?php echo $merubah_data_siswa['alamat_siswa']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon/handphone</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="number" name="no_hp" class="form-control" value="<?php echo $merubah_data_siswa['no_hp']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Saat Ini Tinggal Bersama</label>
                            <input type="text" name="tinggal_bersama" class="form-control" value="<?php echo $merubah_data_siswa['tinggal_bersama']; ?>">
                            <p class="help-block">example : Orang Tua</p>
                        </div>
                        <div class="form-group">
                            <label>Jarak Rumah dengan Tempat TInggal</label>
                            <input type="text" name="jarak_rumah" class="form-control" value="<?php echo $merubah_data_siswa['jarak_rumah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <input type="text" name="golongan_darah" class="form-control" value="<?php echo $merubah_data_siswa['golongan_darah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Penyakit yang pernah diderita</label>
                            <input type="text" name="penyakit_siswa" class="form-control" value="<?php echo $merubah_data_siswa['penyakit_siswa']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Kelainan Jasmani</label>
                            <input type="text" name="kelainan_jasmani" class="form-control" value="<?php echo $merubah_data_siswa['kelainan_jasmani']; ?>">
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
                                    <input type="text" name="tinggi_badan" class="form-control" placeholder="Tinggi Cm" value="<?php echo $merubah_data_siswa['tinggi_badan']; ?>">
                                </div>
                                <div class="col-xs-4">
                                    <label>Berat Badan</label>
                                    <input type="text" name="berat_badan" class="form-control" placeholder="Berat Kg" value="<?php echo $merubah_data_siswa['berat_badan']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lulusan Dari Sekolah</label>
                            <input type="text" name="lulusan_dari" class="form-control" value="<?php echo $merubah_data_siswa['lulusan_dari']; ?>">
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
                                        <input type="text" name="tgl_ijazah" class="form-control datepicker" name="tgl_ijazah" value="<?php echo $merubah_data_siswa['tgl_ijazah']; ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <label>No Ijazah</label>
                                    <input type="text" name="no_ijazah" class="form-control" value="<?php echo $merubah_data_siswa['no_ijazah']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal dan Nomor STL</label>
                            <input type="text" name="tgl_no_stl" class="form-control" value="<?php echo $merubah_data_siswa['tgl_no_stl']; ?>" >
                        </div>
                        <div class="form-group">
                            <label>Lama Belajar</label>
                            <input type="text" name="lama_belajar" class="form-control" value="<?php echo $merubah_data_siswa['lama_belajar']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Pindah Sekolah</label>
                            <input type="text" name="pindah_sekolah" class="form-control" value="<?php echo $merubah_data_siswa['pindah_sekolah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Diterima ditingkat</label>
                            <input type="text" name="terima_ditingkat" class="form-control" value="<?php echo $merubah_data_siswa['terima_ditingkat']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alasan Pindah Sekolah</label>
                            <input type="text" name="alasan_pindah" class="form-control" value="<?php echo $merubah_data_siswa['alasan_pindah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Bidang Study Keahlian</label>
                            <select class="form-control" name="bidang_study">
                                <option value="-" <?php if($merubah_data_siswa['bidang_study'] == '-') { echo "selected"; }?>>-Bidang Study-</option>
                                <option value="Teknik Informasi dan Komunikasi" <?php if($merubah_data_siswa['bidang_study'] == 'Teknik Informasi dan Komunikasi') { echo "selected"; }?>>Teknik Informasi dan Komunikasi</option>
                                <option value="Bisnis dan Manajemen" <?php if($merubah_data_siswa['bidang_study'] == 'Bisnis dan Manajemen') { echo "selected"; }?>>Bisnis dan Manajemen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kompetensi Keahlian</label>
                            <select class="form-control" name="kompetensi_keahlian">
                                <option value="-" <?php if($merubah_data_siswa['kompetensi_keahlian'] == '-') { echo "selected"; }?>>-Kompetensi Keahlian-</option>
                                <option value="Teknik Komputer dan Jaringan" <?php if($merubah_data_siswa['kompetensi_keahlian'] == 'Teknik Komputer dan Jaringan') { echo "selected"; }?>>Teknik Komputer dan Jaringan</option>
                                <option value="Administrasi Perkantoran" <?php if($merubah_data_siswa['kompetensi_keahlian'] == 'Administrasi Perkantoran') { echo "selected"; }?>>Administrasi Perkantoran</option>
                                <option value="Akuntansi" <?php if($merubah_data_siswa['kompetensi_keahlian'] == 'Akuntansi') { echo "selected"; }?>>Akuntansi</option>
                                <option value="Pemasaran" <?php if($merubah_data_siswa['kompetensi_keahlian'] == 'Pemasaran') { echo "selected"; }?>>Pemasaran</option>
                                <option value="Multimedia" <?php if($merubah_data_siswa['kompetensi_keahlian'] == 'Multimedia') { echo "selected"; }?>>Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Masuk SMK Negeri 1 Jogonalan Klaten</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tgl_masuk_sekolah" class="form-control datepicker" name="tgl_masuk_sekolah" value="<?php echo $merubah_data_siswa['tgl_masuk_sekolah']; ?>">
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
                if (isset($_POST['edit'])) 
                {
                        // echo count($_POST);
                    $siswa_sekolah->ubah_siswa($_POST['nis'],$_POST['nisn'],$_POST['nama_lengkap'],$_POST['nama_panggilan'],$_POST['jk_siswa'],$_POST['tempat_lahir_siswa'],$_POST['tgl_lahir_siswa'],$_POST['agama_siswa'],$_POST['kewarganegaraan_siswa'],$_POST['anakke_siswa'],$_POST['jmlh_saudara_angkat'],$_POST['jmlh_saudara_tiri'],$_POST['jmlh_saudara_angkat'],$_POST['anak_siswa'],$_POST['bhsa_sehari'],$_POST['alamat_siswa'],$_POST['no_hp'],$_POST['tinggal_bersama'],$_POST['jarak_rumah'],$_POST['golongan_darah'],$_POST['penyakit_siswa'],$_POST['kelainan_jasmani'],$_POST['tinggi_badan'],$_POST['berat_badan'],$_POST['lulusan_dari'],$_POST['tgl_ijazah'],$_POST['no_ijazah'],$_POST['tgl_no_stl'],$_POST['lama_belajar'],$_POST['pindah_sekolah'],$_POST['terima_ditingkat'],$_POST['alasan_pindah'],$_POST['bidang_study'],$_POST['kompetensi_keahlian'],$_POST['tgl_masuk_sekolah'],$id_data_siswa);

                    echo "<script>alert('Data berhasil disimpan');</script>";
                    echo "<script>location='index.php?halaman=data_siswa';</script>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>