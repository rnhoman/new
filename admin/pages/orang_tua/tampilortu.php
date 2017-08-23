<?php 
    $menampilkan_ortu = $ortu->tampil_ortu();

    if (isset($_GET['id'])) 
    {
        $id_ortu = $_GET['id'];
        $ortu->hapus_ortu($id_ortu);
        echo "<script>alert('Data berhasil dihapus');location='index.php?halaman=orang_tua';</script>";
    }
?>

<div class="box box-info">
    <div class="box-header">
        <h2 class="box-title">Tampil Orang TUa</h2>
    </div>
    <div class="box-body">
        <a href="index.php?halaman=tambahortu" class="btn btn-primary" id="tambah">Tambah</a>
                <button id="import" class="btn btn-info">Import</button>
                <div id="demo" style="display: none;">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="ortu" class="form-control">
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
                    $hasil = $ortu->upload_orang_tua($_FILES['ortu']);

                    // jika nilai dari $hasil samadengan berhasil maka
                    if($hasil=="berhasil")
                    {

                        echo "<script>alert('Data berhasil di upload');location='index.php?halaman=orang_tua';</script>";
                        echo "kadal";
                    }
                    else
                    {
                        echo "<script>alert('Data gagal di upload, Hanya file XLS (Excel 2003) yang diijinkan.');location='index.php?halaman=orang_tua';</script>";
                        echo "singa";;
                    }

                }
                ?>
        <table class="table table-bordered" id="datatable2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menampilkan_ortu as $key => $value): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nis']; ?></td>
                        <td><?php echo $value['nama_ayah_siswa']; ?></td>
                        <td><?php echo $value['nama_ibu_siswa']; ?></td>
                        <td>
                            <a href="index.php?halaman=editortu&id=<?php echo $value['id_ortu']; ?>" class="btn btn-primary">Edit</a>
                            <a href="index.php?halaman=orang_tua&id=<?php echo $value['id_ortu']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
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