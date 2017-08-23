<?php 
$data_kelas_jurusan = $kelas_jurusan_alumni->tampil_kelas_jurusan();
$data_tahun = $tahun_ajaran_siswa->tampil_tahun_ajaran();
?>

<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tambah Perkelasan</h2>
    </div>
    <div class="box-body">
        <form method="POST">
            <div class="form-group">
                <label>Kelas dan Jurusan</label>
                <select name="kelas" class="form-control">
                    <option>-Pilih Kelas dan Jurusan-</option>
                    <?php foreach ($data_kelas_jurusan as $key => $value): ?>
                        <option value="<?php echo $value['id_kelas']; ?>"><?php echo $value['nama_kelas']." ".$value['jurusan_kelas']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tahun Ajaran</label>
                <select name="tahun_ajaran" class="form-control">
                    <option>-Pilih Tahun Ajaran-</option>
                    <?php foreach ($data_tahun as $key => $value): ?>
                        <option value="<?php echo $value['id_tahun_ajaran']; ?>"><?php echo $value['tahun_ajaran']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="simpan" class="btn btn-success">
                <a href="index.php?halaman=perkelasan" class="btn btn-danger">Batal</a>
            </div>
        </form>
        <?php 
        if (isset($_POST['simpan'])) 
        {
            $hasil = $perkelasan_alumni->simpan_perkelasan($_POST['kelas'],$_POST['tahun_ajaran']);
            if ($hasil=="sukses") 
            {
                echo "<script>alert('Data perkelasan baru telah berhasil disimpan');</script>";
                echo "<script>location='index.php?halaman=perkelasan';</script>";
            }
            else
            {
                echo "<script>alert('Data perkelasan baru gagal disimpan, silahkan cek kembali');</script>";
                echo "<script>location='index.php?halaman=tambahperkelasan';</script>";
            }
        }
        ?>
    </div>
</div>