<?php 
    $data_kelas_jurusan = $kelas_jurusan_alumni->tampil_kelas_jurusan();

    // hapus data kelas
    if (isset($_GET['id'])) 
    {
        $id_kelas = $_GET['id'];
        $kelas_jurusan_alumni->hapus_kelas_jurusan($id_kelas);
        echo "<script>alert('Data berhasil dihapus, silahkan cek data tahun ajaran baru');location='index.php?halaman=data_perkelas';</script>";
    }
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Data Perkelas</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahdataperkelas" class="btn btn-primary">Tambah</a><br><br>
        <table class="table table-bordered" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Bidang Study Keahlian dan Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_kelas_jurusan as $key => $value): ?>
                    <tr>
                    <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nama_kelas']; ?></td>
                        <td><?php echo $value['jurusan_kelas']; ?></td>
                        <td>
                            <a href="index.php?halaman=editdataperkelas&id=<?php echo $value['id_kelas']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?halaman=data_perkelas&id=<?php echo $value['id_kelas']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <!-- <a href="index.php?halaman=detaildataperkelas&id=<?php echo $value['id_kelas']; ?>" class="btn btn-info btn-sm">Detail</a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>