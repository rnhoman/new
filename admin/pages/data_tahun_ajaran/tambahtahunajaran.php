<div class="col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-0">
    <div class="box box-info">
        <div class="box-header">
            <h2 class="box-title">Tambah Tahun Ajaran</h2>
        </div>
        <div class="box-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="font-size: 16px;">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="form-control" placeholder="Inputkan Tahun Ajaran">
                    <span class="help-block">Contoh : 2015/2016</span>
                </div>
                <div class="form-group">
                    <input type="submit" name="simpan" class="btn btn-success" value="Simpan">
                    <a href="index.php?halaman=data_tahun_ajaran" class="btn btn-danger">Cancel</a>
                </div>
            </form>
            <?php 
                if (isset($_POST['simpan']))
                {
                    $hasil = $tahun_ajaran_siswa->simpan_tahun_ajaran($_POST['tahun_ajaran']);
                    if ($hasil == "sukses")
                    {
                        echo "<script>alert('Data tahun ajaran baru telah berhasil disimpan');</script>";
                        echo "<script>location='index.php?halaman=data_tahun_ajaran';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Data tahun ajaran baru gagal disimpan, silahkan cek kembali');</script>";
                        echo "<script>location='index.php?halaman=tambahtahunajaran';</script>";
                    }
                }
            ?>
        </div>
    </div>
</div>