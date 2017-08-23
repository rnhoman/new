<?php 
$data_tampil_perkembangan_siswa = $perkembangan_siswa_sklh->tampil_perkembangan_siswa();

if (isset($_GET['id'])) 
{
    $id_perkembangan_siswa = $_GET['id'];
    $perkembangan_siswa_sklh->hapus_perkembangan_siswa($id_perkembangan_siswa);
    echo "<script>alert('Data Berhasil dihapus');location='index.php?halaman=perkembangan_siswa';</script>";
}
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Wali Siswa</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahperkembangansiswa" class="btn btn-primary">Tambah</a>
        <table class="table table-bordered" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Kesenian</th>
                    <th>Olahraga</th>
                    <th>Organisasi / Kemasyarakatan</th>
                    <th>Hobi Lain</th>
                    <th>Menerima Beasiswa Tahun/tingkat/dari</th>
                    <th>Tgl Meninggalkan Sekolah</th>
                    <th>Alasan Pindah Sekolah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_tampil_perkembangan_siswa as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nis']; ?></td>
                        <td><?php echo $value['kesenian']; ?></td>
                        <td><?php echo $value['olahraga']; ?></td>
                        <td><?php echo $value['organisasi']; ?></td>
                        <td><?php echo $value['hobi_lain']; ?></td>
                        <td><?php echo $value['tahun_beasiswa']." - ".$value['tingkat_beasiswa']." - ".$value['dari_beasiswa']; ?></td>
                        <td><?php echo $value['tgl_meninggalkan_sklh']; ?></td>
                        <td><?php echo $value['alasan_meninggalkan_sklh']; ?></td>
                        <td>
                            <a href="index.php?halaman=editperkembangansiswa&id=<?php echo $value['id_perkembangan_siswa']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?halaman=perkembangan_siswa&id=<?php echo $value['id_perkembangan_siswa']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>