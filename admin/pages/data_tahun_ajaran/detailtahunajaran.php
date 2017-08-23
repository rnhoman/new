<?php  
$id_tahun_ajaran = $_GET['id'];
$detailtahunajaran = $tahun_ajaran_siswa->ambil_tahun_ajaran($id_tahun_ajaran);
?>
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-0">
    <div class="box box-info">
        <div class="box-header">
            <h2 class="box-title">Detail Tahun Ajaran</h2>
        </div>
        <div class="box-body">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <a href="index.php?halaman=data_tahun_ajaran" class="btn btn-info"><i class="fa fa-right"></i>Kembali</a>
                <table class="table table-bordered">
                    <tr>
                        <th>Tahun Ajaran</th>
                        <td><?php echo $detailtahunajaran['tahun_ajaran']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>