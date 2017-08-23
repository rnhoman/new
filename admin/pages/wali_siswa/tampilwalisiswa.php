<?php 
$menampilkan_wali_siswa = $wali->tampil_wali_siswa();

if (isset($_GET['id'])) 
{
    $id_wali_siswa = $_GET['id'];
    $wali->hapus_wali_siswa($id_wali_siswa);
    echo "<script>alert('Data berhasil dihapus');location='index.php?halaman=wali_siswa';</script>";

}
?>

<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Wali Siswa</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahwalisiswa" class="btn btn-primary">Tambah</a>
        <table class="table table-bordered" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Wali Siswa</th>
                    <th>Pekerjaan Wali Siswa</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menampilkan_wali_siswa as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nis']; ?></td>
                        <td><?php echo $value['nama_wali_siswa']; ?></td>
                        <td><?php echo $value['pekerjaan_wali_siswa']; ?></td>
                        <td>
                            <a href="index.php?halaman=editwalisiswa&id=<?php echo $value['id_wali_siswa']; ?>" class="btn btn-primary">Edit</a>
                            <a href="index.php?halaman=wali_siswa&id=<?php echo $value['id_wali_siswa']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>