<div class="row">
    <div class="col-md-10 col-md-offset-1 col-sm-3">
        <div class="box box-info">
            <div class="box-header">
                <h2 class="box-title">Form Event</h2>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Judul Event</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul_event" class="form-control" placeholder="Input Judul Event" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Isi Konten Event</label>
                        <div class="col-sm-10">
                            <textarea class="form-control kontenisi" name="isi_konten_event" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Gambar Event</label>
                        <div class="col-sm-10">
                            <input type="file" name="gambar_event" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <input type="submit" name="simpan" class="btn btn-success" value="Simpan">
                            <a href="index.php?halaman=event" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
                <?php 

            // echo $_POST['judul_event'];
            // echo "<br>";
            // echo $_POST['isi_konten_event'];
            // echo "<br>";
            // echo $_POST['waktu_posting_event'];
                if (isset($_POST["simpan"])) 
                {
                    $tgl = date("Y-m-d H:i:s");
                    $hasil = $pengumuman_event->simpan_event($_POST['judul_event'],$_POST['isi_konten_event'],$tgl,$_FILES['gambar_event']);
                    if ($hasil == "sukses" ) 
                    {
                        echo "<script>alert('Data berhasil disimpan');</script>";
                        echo "<script>location='index.php?halaman=event';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Data gagal disimpan, file bukan gambar');</script>";
                        echo "<script>location='index.php?halaman=tambahevent';</script>";
                    }
                }

                ?>
            </div>
        </div>
    </div>
</div>