<?php 
    $id_kelas = $_GET['id'];
    $detailperkelas = $kelas_jurusan_alumni->ambil_kelas_jurusan($id_kelas);
?>
<div class="col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-0">
    <div class="box box-info">
        <div class="box-header">
            <h2 class="box-title">Tambah Data Perkelas</h2>
        </div>
        <div class="box-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="font-size: 16px;">Nama Kelas</label>
                    <input type="text" class="form-control" placeholder="Inputkan Nama Kelas" value="<?php echo $detailperkelas['nama_kelas']; ?>" name="nama_kelas" readonly>
                    <span class="help-block">Contoh : X/XI/XII</span>
                </div>
                <div class="form-group">
                    <label style="font-size: 16px;">Bidang Study Keahlian dan Kelas</label>
                    <input type="text" name="jurusan_kelas" class="form-control" placeholder="Input Jurusan dan Kelas" value="<?php echo $detailperkelas['jurusan_kelas']; ?>">
                    <span class="help-block">Contoh : Administrasi Perkantoran 1</span>
                </div>
                <div class="form-group">
                    <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                    <a href="index.php?halaman=data_kelas_jurusan" class="btn btn-warning">Cancel</a>
                </div>
            </form>
            <?php 
                if (isset($_POST['edit'])) 
                {
                    $hasil = $kelas_jurusan_alumni->ubah_kelas_jurusan($_POST['nama_kelas'],$_POST['jurusan_kelas'],$id_kelas);
                    // echo "<script>alert('Data kelas telah berhasil diubah');</script>";
                    // echo "<script>location='index.php?halaman=data_perkelas';</script>";
                    //echo $hasil;
                    if ($hasil == "sukses")
                    {
                        echo "<script>alert('Data kelas telah berhasil diubah');</script>";
                        echo "<script>location='index.php?halaman=data_kelas_jurusan';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Data kelas gagal diubah');</script>";
                        echo "<script>location='index.php?halaman=editdataperkelas&id=$_GET[id]';</script>";
                    }
                }
            ?>
        </div>
    </div>
</div>