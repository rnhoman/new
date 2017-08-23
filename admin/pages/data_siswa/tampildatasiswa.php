<?php 
$data_siswa_sekolah = $siswa_sekolah->tampil_siswa();

// hapus data kelas
if (isset($_GET['id'])) 
{
    $id_data_siswa = $_GET['id'];
    $siswa_sekolah->hapus_siswa($id_data_siswa);
    echo "<script>alert('Data berhasil dihapus');location='index.php?halaman=data_siswa';</script>";
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header">
                <h2 class="box-title">Tampil Siswa/Siswi SMK Negeri 1 Jogonalan Klaten</h2>
            </div>
            <div class="box-body">
                <a href="index.php?halaman=tambahsiswa" class="btn btn-primary" id="tambah">Tambah</a>
                <button id="import" class="btn btn-info">Import</button>
                <div id="demo" style="display: none;">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="siswa" class="form-control">
                        </div>
                        <button class="btn btn-success" name="upload">Upload</button>
                        <a class="btn btn-danger" id="batal">Batal</a>
                    </form>
                </div>
                <br>
                <br>
                <?php
                // jika ada tombol di form dengan name upload maka
                if(isset($_POST['upload']))
                {
                    // obyek yang menyimpan class siswa menjalankan function upload_data_siswa()
                    $hasil = $siswa_sekolah->upload_data_siswa($_FILES['siswa']);

                    // jika nilai dari $hasil samadengan berhasil maka
                    if($hasil=="berhasil")
                    {

                        echo "<script>alert('Data berhasil di upload');location='index.php?halaman=data_siswa';</script>";
                        echo "Kadal";
                    }
                    else
                    {
                        echo "<script>alert('Data gagal di upload, Hanya file XLS (Excel 2003) yang diijinkan.');location='index.php?halaman=data_siswa';</script>";   
                        echo "Singa";
                    }

                }
                ?>
                <table class="table table-bordered table-striped" id="datatable2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Tgl Lahir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_siswa_sekolah as $key => $value): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value['nis']; ?></td>
                                <td><?php echo $value['nama_lengkap']; ?></td>
                                <td><?php echo date('Y-m-d', strtotime($value['tgl_lahir_siswa'])); ?></td>
                                <td>
                                    <a href="index.php?halaman=editdatasiswa&id=<?php echo $value['id_data_siswa']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="index.php?halaman=data_siswa&id=<?php echo $value['id_data_siswa']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    <a href="index.php?halaman=detaildatasiswa&id=<?php echo $value['nis']; ?>" class="btn btn-info btn-sm">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#import").on("click", function(){
            $("#tambah").hide(650);
            $("#import").hide(650);
            $("#demo").show(650);
        });
        $("#batal").on("click", function(){
            $("#tambah").show(650);
            $("#import").show(650);
            $("#demo").hide(650);
        });
    });
</script>