<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Ubah Password</h2>
    </div>
    <div class="box-body">
        <form method="POST">
            <div class="">
                <div class="form-group">
                    <label>Password Lama</label>
                    <input type="password" name="password_lama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="password_baru" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="submit">Ubah</button>
                    <a href="#" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </form>
        <?php
            // Jika tombol di dalam form dgn nama submit maka
            if (isset($_POST['submit'])) 
            {
                $hasil=$alumni->ganti_pass($_POST['password_lama'],$_POST['password_baru'],$_SESSION['alumni']['id_data_siswa'],$_SESSION['alumni']['password'])or die(mysqli_error($this->koneksi));
                if ($hasil="berhasil") 
                {
                    echo "<script>alert('Password berhasil dirubah');</script>";
                    echo "<script>location='index.php';</script>";
                }
                else
                {
                    echo "<script>alert('Password gagal dirubah');</script>";
                    echo "<script>location='index.php?halaman=ubah_password';</script>";
                }
            }
        ?>
    </div>
</div>