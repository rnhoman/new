<?php 
    $idevent = $_GET['id'];
    $detailevent = $pengumuman_event->ambil_event($idevent);

?>
<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Edit Event</h2>
    </div>
    <div class="box-body">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Judul Event</label>
                <div class="col-sm-8">
                    <input type="text" name="judul_event" class="form-control" placeholder="Input Judul Event" value="<?php echo $detailevent['judul_event']; ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Isi Konten Event</label>
                <div class="col-sm-8">
                    <textarea class="form-control kontenisi" name="isi_konten_event" rows="4" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; font-style: justify; "><?php echo $detailevent['isi_konten_event']; ?></textarea>
                </div>
            </div>
            <div class="form-group" hidden="">
                <label class="col-sm-2 control-label">Waktu Posting Event</label>
                <div class="col-sm-8">
                    <input type="datetime-local" name="waktu_posting_event" class="form-control" value="<?php echo $detailevent['waktu_posting_event']; ?>">
                </div>
            </div>
            <div class="form-group">
                
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-8">
                    <input type="file" name="gambar_event" class="form-control">
                    <img src="../assets/image/event/<?php echo $detailevent['gambar_event']; ?>" width="200"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-2">
                    <input type="submit" name="edit" class="btn btn-success" value="Edit">
                    <a href="index.php?halaman=event" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
        <?php 
            if(isset($_POST['edit']))
            {
                $tgl = date("Y-m-d H:i:s");
                $hasil = $pengumuman_event->ubah_event($_POST['judul_event'],$_POST['isi_konten_event'],$tgl,$_FILES['gambar_event'],$idevent);
                if($hasil == "sukses")
                {
                    echo "<script>alert('Data berhasil diubah');</script>";
                    echo "<script>location='index.php?halaman=event';</script>";
                    //echo "<script>alert('');</script>";
                    //echo "<script>location='index.php?halaman=event';</script>";
                }
                else
                {
                    echo "<script>alert('Gagal diubah, silahkan cek kembali');</script>";
                    echo "<script>location='index.php?halaman=tambahevent';</script>";
                }
            }
        ?>
    </div>
</div>