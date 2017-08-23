<?php
$id_event = $_GET['id'];
$detailevent = $pengumuman_event->ambil_event($id_event);
?>

<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">
            Detail Event
        </h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=event" class="btn btn-info">Kembali</a>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="../assets/image/event/<?php echo $detailevent['gambar_event']; ?>" width="200">
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <table class="table table-borderede">
                    <tr>
                        <th>Judul Posting Event</th>
                        <td><?php echo $detailevent['judul_event']; ?></td>
                    </tr>
                    <tr>
                        <th>Waktu Posting Event</th>
                        <td><?php echo $detailevent['waktu_posting_event']; ?></td>
                    </tr>
                    <tr>
                        <th>Isi Konten Event</th>
                        <td><?php echo $detailevent['isi_konten_event']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>