<?php 
    $data_tahun = $tahun_ajaran_siswa->tampil_tahun_ajaran();

    // untuk menghapus data
    if (isset($_GET['id'])) 
    {
        $id_tahun_ajaran = $_GET['id'];
        $tahun_ajaran_siswa->hapus_tahun_ajaran($id_tahun_ajaran);
        echo "<script>alert('Data berhasil dihapus, silahkan cek data tahun ajaran baru');location='index.php?halaman=data_tahun_ajaran';</script>";
    }
    
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Data Tahun Ajaran</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahtahunajaran" class="btn btn-primary">Tambah</a><br><br>
        <table class="table table-bordered" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tahun Ajaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_tahun as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['tahun_ajaran']; ?></td>
                        <td>
                            <a href="index.php?halaman=edittahunajaran&id=<?php echo $value['id_tahun_ajaran']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?halaman=data_tahun_ajaran&id=<?php echo $value['id_tahun_ajaran']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <!-- <a href="index.php?halaman=detailtahunajaran&id=<?php echo $value['id_tahun_ajaran']; ?>" class="btn btn-info btn-sm">Detail</a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>