<?php 
    $da = $_SESSION['alumni'];

?>
<div class="row">
    <div class="col-xs-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="dist/img/logo.png" height="100px" width="100px" alt="" class="img-resposive">
                    </div>
                    <div class="col-xs-9">
                        <h3 style="text-align: center;">KELUARGA ALUMNI <br> SMK NEGERI 1 JOGONALAN KLATEN</h3>
                        <h3 style="text-align: center;"></h3>
                    </div>
                </div>
            </div>
            <div class="height-border"></div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-4">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <td>
                                <p style="padding-top: 20px; padding-bottom: 20px;">
                                  <center>Foto 2x3</center>
                                </p>
                              </td>
                            </tr>
                          </thead>
                        </table>
                    </div>
                    <div class="col-xs-8">
                        <table class="table">
                          <tr>
                              <th width="40%">Nama Lengkap</th>
                              <td><?php echo $da['nama_lengkap']; ?></td>
                            </tr>
                            <tr>
                              <th>TTL</th>
                              <td><?php echo $da['tempat_lahir_siswa'].", ".$da['tgl_lahir_siswa']; ?></td>
                            </tr>
                            <tr>
                              <th>Alamat</th>
                              <td><?php echo $da['alamat_siswa']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <a onClick="print()" class="hidden-print btn btn-info"><i class="fa fa-print"></i>Cetak</a>
            </div>
        </div>
    </div>
</div>