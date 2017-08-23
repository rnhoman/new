<?php 
$data_siswa_sekolah = $siswa_sekolah->tampil_siswa();
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Form Kartu Alumni</h2>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-striped table-responsive" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_siswa_sekolah as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nis']; ?></td>
                        <td><?php echo $value['nama_lengkap']; ?></td>
                        <td>
                            <a href="index.php?halaman=cetakkartu&id=<?php echo $value['nis']; ?>" class="btn btn-info">Cetak Kartu</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>