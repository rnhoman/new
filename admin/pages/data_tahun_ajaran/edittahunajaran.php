<?php 
    $id_tahun_ajaran = $_GET['id'];
    $edit_tahun_ajaran = $tahun_ajaran_siswa->ambil_tahun_ajaran($id_tahun_ajaran);

    // echo "<pre>";
    // print_r($edit_tahun_ajaran);
    // echo "</pre>";
?>
<div class="col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-0">
    <div class="box box-info">
        <div class="box-header">
            <h2 class="box-title">Edit Tahun Ajaran</h2>
        </div>
        <div class="box-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="font-size: 16px;">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran_baru" class="form-control" placeholder="Inputkan Tahun Ajaran" value="<?php echo $edit_tahun_ajaran['tahun_ajaran']; ?>">
                    <span class="help-block">Contoh : 2015/2016</span>
                </div>
                <div class="form-group">
                    <button type="submit" name="edit" class="btn btn-primary" >Edit</button>
                    <a href="index.php?halaman=data_tahun_ajaran" class="btn btn-warning">Cancel</a>
                </div>
            </form>
            <?php 
                if(isset($_POST['edit']))
                {
                    $hasil = $tahun_ajaran_siswa->ubah_tahun_ajaran($_POST['tahun_ajaran_baru'], $id_tahun_ajaran);
                    echo $hasil;
                    if ($hasil == "sukses")
                    {
                        echo "<script>alert('Data tahun ajaran telah berhasil diubah');</script>";
                        echo "<script>location='index.php?halaman=data_tahun_ajaran';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Data Tahun ajaran gagal diubah');</script>";
                        echo "<script>location='index.php?halaman=edittahunajaran&id=$_GET[id]';</script>";
                    }
                }
            ?>
        </div>
    </div>
</div>