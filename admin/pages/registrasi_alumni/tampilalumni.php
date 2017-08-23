<?php 
    // Source tampil registrasi alumni
$regis_alumni = $regist_alumni_sklh->tampil_regis_alumni();

    // Hapus data
if (isset($_GET['id'])) 
{
    $id_regis_alumni = $_GET['id'];
    $regist_alumni_sklh->hapus_regis_alumni($id_regis_alumni);
    echo "<script>alert('Data berhasil dihapus');location='index.php?halaman=registrasi_alumni';</script>";
}
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Registrasi Alumni</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahalumni" class="btn btn-primary">Tambah</a>
        <table class="table table-bordered" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Lengkap Alumni</th>
                    <th>Kegiatan Setelah Lulus</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($regis_alumni as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nis']; ?></td>
                        <td><?php echo $value['nama_lengkap_alumni']; ?></td>
                        <td><?php echo $value['kegiatan_setelah_lulus']; ?></td>
                        <td>
                            <a href="index.php?halaman=editalumni&id=<?php echo $value['id_regis_alumni']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?halaman=registrasi_alumni&id=<?php echo $value['id_regis_alumni']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <!-- <a href="#" class="btn btn-info btn-sm">Detail</a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>