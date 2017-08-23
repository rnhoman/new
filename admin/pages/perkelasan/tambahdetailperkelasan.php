<?php 
// cource 
if (isset($_POST['pilih'])) 
{
    $data_siswa_sekolah=$siswa_sekolah->tampil_nis_siswa($_POST['nis_awal'],$_POST['nis_akhir']);
}
 ?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tambah Perkelasan Detail</h2>
    </div>
    <div class="box-body">
        <form method="POST">
        <div class="form-group">
            <input type="number" name="nis_awal" class="form-control">
            <input type="number" name="nis_akhir" class="form-control">
            <button class="btn btn-success" name="pilih">PILIH</button>
            <a href="index.php?halaman=perkelasan" class="btn btn-danger">KEMBALI</a>
        </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Pilih</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_siswa_sekolah as $key => $value): ?>
                        <tr>
                            <td><?php echo $value['nis']; ?></td>
                            <td><?php echo $value['nama_lengkap']; ?></td>
                            <td>
                                <input type="checkbox" name="siswa[<?php echo $value['id_data_siswa']; ?>]" checked>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <button class="btn btn-success" name="simpan_siswa">SIMPAN</button>
        </form>
    </div>
</div>
<?php 
if (isset($_POST['simpan_siswa'])) 
{
    $perkelasan_alumni->simpan_siswa_detail($_POST['siswa'], $_GET['id']);
    echo "<script>alert('Berhasil dipilih');</script>";
    echo "<script>location='index.php?halaman=detailperkelasan&id=$_GET[id]';</script>";
}
?>