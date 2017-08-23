<?php 
    $id_loker = $_GET['id'];
    $detailloker = $pengumuman_loker->ambil_loker($id_loker);
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Detail Lowongan Pekerjaan</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=loker" class="btn btn-info">Kembali</a>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="../assets/image/loker/<?php $detailloker['gambar_loker']; ?>" width="150" class="img-responsive">
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Perusahaan/Instansi</th>
                        <td><?php echo $detailloker['nama_pt_loker']; ?></td>
                    </tr>
                    <tr>
                        <th>Posisi Lowongan Pekerjaan</th>
                        <td><?php echo $detailloker['judul_loker']; ?></td>
                    </tr>
                    <tr>
                        <th>Waktu Posting</th>
                        <td><?php echo $detailloker['waktu_posting_loker']; ?></td>
                    </tr>
                    <tr>
                        <th>Deadline Lowongan Pekerjaan</th>
                        <td><?php echo $detailloker['jatuh_tempo_loker']; ?></td>
                    </tr>
                    <tr>
                        <th>Syarat Lowongan Pekerjaan dan Deskripsi</th>
                        <td><?php echo $detailloker['isi_konten_loker']; ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon/Hp Perusahan</th>
                        <td><?php echo $detailloker['nohp_loker']; ?></td>
                    </tr>
                    <tr>
                        <th>Status Postingan</th>
                        <td>
                            <?php if ($detailloker['status_loker']=="active"): ?>
                                <span class="label label-success">
                                    <?php echo $detailloker['status_loker']; ?>
                                </span>
                            <?php else: ?>
                                <span class="label label-danger">
                                    <?php echo $detailloker['status_loker']; ?>
                                </span>
                            <?php endif ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>