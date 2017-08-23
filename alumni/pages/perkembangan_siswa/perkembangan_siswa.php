<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-4 col-sm-offset-0">
        <div class="box box-info">
            <div class="box-header">
                <h2 class="box-title">Tambah Perkembangan Siswa</h2>
            </div>
            <div class="box-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kesenian</label>
                            <input type="text" name="kesenian" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Olahraga</label>
                            <input type="text" name="olahraga" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Organisasi/Kemasyarakatan</label>
                            <input type="text" name="organisasi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kegemaran Lain</label>
                            <input type="text" name="hobi_lain" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tahun Beasiswa</label>
                            <input type="text" name="tahun_beasiswa" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tingkat Beasiswa</label>
                            <input type="text" name="tingkat_beasiswa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Dari Beasiswa</label>
                            <input type="text" name="dari_beasiswa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Meninggalakan Sekolah</label>
                            <input type="text" name="tgl_meninggalkan_sklh" class="form-control datepicker">
                        </div>
                        <div class="form-group">
                            <label>Alasan Meninggalkan Sekolah</label>
                            <textarea name="alasan_meninggalkan_sklh" class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-1">
                        <a href="index.php?halaman=data_siswa" class="btn btn-danger" onClick='return confirm("Apakah anda ingin membatalkannya?")' ><i class="fa fa-ban"></i>&nbsp; Batal</a>
                    </div>
                    <!-- button simpan -->
                    <div class="col-md-4 col-md-offset-7 col-sm-4">
                        <button class="btn btn-success" name="simpan" style="float: right;"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                    </div>
                </form>
                <?php 

                ?>
            </div>
        </div>
    </div>
</div>