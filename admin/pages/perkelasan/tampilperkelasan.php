<?php 
$info_kelas = $perkelasan_alumni->tampil_perkelasan();

if (isset($_GET['id'])) 
{
    $id_perkelasan = $_GET['id'];
    $perkelasan_alumni->hapus_perkelasan($id_perkelasan);
    echo "<script>alert('Data berhasil dihapus, silahkan cek data perkelasan');location='index.php?halaman=perkelasan';</script>";
}
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Perkelasan</h2>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-striped" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($info_kelas as $key => $value): ?>
                    <tr>
                    <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nama_kelas']." ".$value['jurusan_kelas']; ?></td>
                        <td><?php echo $value['tahun_ajaran']; ?></td>
                        <td>
                            <a href="index.php?halaman=perkelasan&id=<?php echo $value['id_perkelasan'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <a href="index.php?halaman=detailperkelasan&id=<?php echo $value['id_perkelasan']; ?>" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        <a href="index.php?halaman=tambahperkelasan" class="btn btn-primary">Tambah</a>
    </div>
</div>

