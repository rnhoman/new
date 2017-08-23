<?php 
    $id_kelas = $_GET['id'];
    $detailkelas = $kelas_jurusan_alumni->ambil_kelas_jurusan($id_kelas);
?>
<div class="col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-0">
    <div class="box box-info">
        <div class="box-header">
            <h2 class="box-title">Detail Data Perkelas</h2>
        </div>
        <div class="box-body">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <a href="index.php?halaman=data_kelas_jurusan" class="btn btn-info">Kembali</a>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Kelas</th>
                        <td><?php echo $detailkelas['nama_kelas']; ?></td>
                    </tr>
                    <tr>
                        <th>Bidang Study Keahlian dan Kelas</th>
                        <td><?php echo $detailkelas['jurusan_kelas']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>