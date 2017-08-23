<?php 
$idp = $_GET['id'];
$data_perkelasan_detail = $perkelasan_alumni->ambil_perkelasan_detail($idp);
$data_perkelasan = $perkelasan_alumni->ambil_perkelasan($idp);
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Detail Perkelasan <?php echo $data_perkelasan['nama_kelas']." ".$data_perkelasan['jurusan_kelas']." ".$data_perkelasan['tahun_ajaran']; ?></h2>
    </div>
    <form method="POST" class="form-inline">
        <div class="box-body">
            <table class="table table-bordered" id="datatable1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama Lengkap</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_perkelasan_detail as $key => $value): ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value['nis']; ?></td>
                            <td><?php echo $value['nama_lengkap']; ?></td>
                            <td>
                                <?php if ($value['status']=="Lulus"): ?>
                                    <span class="label label-success">
                                        <?php echo $value['status']; ?>
                                    </span>
                                <?php else: ?>
                                    <span class="label label-danger">
                                        <?php echo $value['status']; ?>
                                    </span>
                                <?php endif ?>
                            </td>
                            <?php if ($value['status']=="Lulus"): ?>
                            <?php else: ?>
                                <td>
                                <input type="checkbox" name="lulus_siswa[<?php echo $value['id_data_siswa']; ?>]" checked>
                                </td>
                                
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="box-footer">
            <div class="form-group">
                <select class="form-control" name="status" required="REQUIRED">
                    <option value="">-- Pilih Status  --</option>
                    <option value="Tidak Lulus">Tidak Lulus</option>
                    <option value="Lulus">Lulus</option>
                </select>
            </div>
            <a href="index.php?halaman=perkelasan" class="btn btn-warning">KEMBALI</a>
            <button class="btn btn-info" type="submit" name="Lulus">LULUS</button>
            <a href="index.php?halaman=tambahdetailperkelasan&id=<?php echo $_GET['id']; ?>" class="btn btn-success">TAMBAH SISWA</a>
        </div>
    </form>
</div>

<?php 
if (isset($_POST['Lulus'])) 
{
    $perkelasan_alumni->lulus_siswa($_POST['status'],$_POST['lulus_siswa'], $_GET['id']);
    echo "<script>location='index.php?halaman=detailperkelasan&id=$_GET[id]';</script>";
}
?>