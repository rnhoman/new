<?php 
date_default_timezone_set('Asia/Jakarta');
$data_loker = $pengumuman_loker->tampil_loker();


    // sintak untuk menghapus
    if (isset($_GET['id'])) 
    {
        $id_event = $_GET['id'];
        $pengumuman_loker->hapus_loker($id_event);
        echo "<script>alert('Data berhasil dihapus');location='index.php?halaman=loker';</script>";
    }
?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Lowongan Pekerjaan</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahloker" class="btn btn-primary">Tambah</a>
        <table class="table table-bordered" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama PT</th>
                    <th>Tanggal Posting</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_loker as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nama_pt_loker']; ?></td>
                        <td><?php echo $value['waktu_posting_loker']; ?></td>
                        <td><?php echo $value['jatuh_tempo_loker']; ?></td>
                        <td>
                            <?php $sekarang = strtotime(date("Y-m-d H:i:s")); ?>
                            <?php $jatuh_tempo = strtotime($value['jatuh_tempo_loker']); ?>
                            <?php 
                                if ($sekarang>=$jatuh_tempo) 
                                {
                                    echo "Disable";
                                }
                                else
                                {
                                    echo "Active";
                                }
                            ?>
                        </td>
                        <td>
                            <a href="index.php?halaman=editloker&id=<?php echo $value['id_loker']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?halaman=loker&id=<?php echo $value['id_loker']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <a href="index.php?halaman=detailloker&id=<?php echo $value['id_loker']; ?>" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>