<?php 
    $data_event = $pengumuman_event->tampil_event();


    // sintak untuk menghapus
    if (isset($_GET['id'])) 
    {
        $id_event = $_GET['id'];
        $pengumuman_event->hapus_event($id_event);
        echo "<script>alert('Data berhasil dihapus');location='index.php?halaman=event';</script>";
    }
?>
<!-- <pre>
    <?php //print_r($data_event); ?>
</pre> -->
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Event</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahevent" class="btn btn-primary">Tambah</a>
        <table class="table table-borderede" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Event</th>
                    <th>Tanggal Posting</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_event as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['judul_event']; ?></td>
                        <td><?php echo $value['waktu_posting_event']; ?></td>
                        <td>
                            <a href="index.php?halaman=editevent&id=<?php echo $value['id_event']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?halaman=event&id=<?php echo $value['id_event']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <a href="index.php?halaman=detailevent&id=<?php echo $value['id_event']; ?>" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>