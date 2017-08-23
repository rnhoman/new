<div class="col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-0">
    <div class="box box-info">
        <div class="box-header">
            <h2 class="box-title">Tambah Data Perkelas</h2>
        </div>
        <div class="box-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="font-size: 16px;">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" placeholder="Inputkan Nama Kelas">
                    <span class="help-block">Contoh : X/XI/XII</span>
                </div>
                <div class="form-group">
                    <label style="font-size: 16px;">Bidang Study Keahlian dan Kelas</label>
                    <input type="text" name="jurusan_kelas" class="form-control" placeholder="Input Jurusan dan Kelas">
                    <span class="help-block">Contoh : Administrasi Perkantoran 1</span>
                </div>
                <div class="form-group">
                    <input type="submit" name="simpan" class="btn btn-success" value="Simpan">
                    <a href="index.php?halaman=data_kelas_jurusan" class="btn btn-danger">Cancel</a>
                </div>
            </form>
            <?php 
                // echo $_POST['nama_kelas'];
                // echo "<br>";
                // echo $_POST['jurusan_kelas'];

                if (isset($_POST["simpan"])) 
                {
                    $hasil = $kelas_jurusan_alumni->simpan_kelas_jurusan($_POST['nama_kelas'],$_POST['jurusan_kelas']);
                    if ($hasil == "sukses" ) 
                    {
                        echo "<script>alert('Data berhasil disimpan');</script>";
                        echo "<script>location='index.php?halaman=data_kelas_jurusan';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Data gagal disimpan');</script>";
                        echo "<script>location='index.php?halaman=tambahdataperkelas';</script>";
                    }
                }

                

            ?>
        </div>
    </div>
</div>