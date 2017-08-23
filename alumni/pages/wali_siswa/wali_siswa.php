<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-0">
        <div class="box box-info">
            <div class="box-header">
                <h2 class="box-title">Tambah Wali Siswa</h2>
            </div>
            <div class="box-body">
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
                    echo "<script>location='index.php?halaman=perkembangan_siswa';</script>";

                }
                ?>
            </div>
        </div>
    </div>
</div>