<?php
$idloker = $_GET['id'];
$edit_post_loker = $pengumuman_loker->ambil_loker($idloker);

?>

<div class="row">
    <div class="col-md-10 col-md-offset-1 col-sm-4">
        <div class="box box-info">
            <div class="box-header">
                <h2 class="box-title">Form Lowongan Pekerjaan</h2>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Nama Perusahaan/Instansi</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_pt_loker" class="form-control" placeholder="Inputkan nama Perusahaan" value="<?php echo $edit_post_loker['nama_pt_loker']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Posisi Lowongan Pekerjaan</label>
                        <div class="col-sm-8">
                            <input type="text" name="judul_loker" class="form-control" placeholder="Inputkan bagian lowongan pekerjaan" value="<?php echo $edit_post_loker['judul_loker']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Deadline Lowongan Pekerjaan</label>
                        <div class="col-sm-8">
                            <!-- <input type="datetime-local" name="jatuh_tempo_loker" class="form-control"> -->
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datetimepicker" value="<?php echo $edit_post_loker['jatuh_tempo_loker']; ?>" name="jatuh_tempo_loker">
                                <!-- <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input type="time-local" class="form-control pull-right timepicker"> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Syarat Lowongan Pekerjaan dan Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea name="isi_konten_loker" class="form-control kontenisi" rows="5" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; font-style: justify; "><?php echo $edit_post_loker['isi_konten_loker']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Nomor Telepon/Hp Perusahan</label>
                        <div class="col-sm-8">
                            <input type="number" name="nohp_loker" class="form-control" placeholder="Input Nomor Telepon/Hp Perusahaan" value="<?php echo $edit_post_loker['nohp_loker']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Gambar Lowongan Pekerjaan</label>
                        <div class="col-sm-8">
                            <input type="file" name="gambar_loker" class="form-control">
                            <p class="help-block">example name file : PT Asakusa</p>
                            <img src="../assets/image/loker/<?php echo $edit_post_loker['gambar_loker']; ?>" width="200"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Status Postingan</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="status_loker">
                                <option value="Active" <?php if($edit_post_loker['status_loker'] == 'Active') { echo "selected"; }?>>Active</option>
                                <option value="Disable" <?php if($edit_post_loker['status_loker'] == 'Disable') { echo "selected"; }?>>Disable</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <input type="submit" name="edit" class="btn btn-success" value="Simpan">
                            <a href="index.php?halaman=loker" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
                <?php 
                if (isset($_POST['edit'])) 
                {
                    // echo "<pre>";
                    // print_r($_FILES);
                    // echo "</pre>";
                    $tgl = date("Y-m-d H:i:s");
                    $hasil = $pengumuman_loker->edit_loker($_POST['nama_pt_loker'],$_POST['judul_loker'],$_POST['jatuh_tempo_loker'],$_POST['isi_konten_loker'],$tgl,$_POST['nohp_loker'],$_FILES['gambar_loker'],$_POST['status_loker'],$idloker);
                    if ($hasil=="sukses") 
                    {
                        echo "<script>alert('Data berhasil diedit');</script>";
                        echo "<script>location='index.php?halaman=loker';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Data gagal diedit');</script>";
                        echo "<script>location='index.php?halaman=editloker';</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>