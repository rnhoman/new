<div class="callout callout-warning">
    <h4><i class="fa fa-bullhorn"></i></h4>
    <p style="text-align: justify;"></p>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1 col-sm-4 col-sm-offset-0">
        <div class="box box-info">
            <div class="callout callout-info">
                <h2 style="text-align: center;">Keterangan Kesehatan dan Pendidikan Terakhir</h2>
            </div>
            <div class="box-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <input type="text" name="golongan_darah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Penyakit yang pernah diderita</label>
                            <input type="text" name="penyakit_siswa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kelainan Jasmani</label>
                            <input type="text" name="kelainan_jasmani" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tinggi dan Berat Badan</label>
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>Tinggi Badan</label>
                                    <input type="text" name="tinggi_badan" class="form-control" placeholder="Tinggi Cm">
                                </div>
                                <div class="col-xs-4">
                                    <label>Berat Badan</label>
                                    <input type="text" name="berat_badan" class="form-control" placeholder="Berat Kg">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lulusan Dari Sekolah</label>
                            <input type="text" name="lulusan_dari" class="form-control">
                            <p class="help-block">Example : SMP Negeri 1 Jetis</p>
                        </div>
                        <div class="form-group">
                            <label>Tanggal dan Nomor Ijazah</label>
                            <div class="row">
                                <div class="col-xs-5">
                                    <label>Tgl Ijazah</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="tgl_ijazah" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tgl_ijazah">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <label>No Ijazah</label>
                                    <input type="text" name="no_ijazah" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal dan Nomor STL</label>
                            <input type="text" name="tgl_no_stl" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Lama Belajar</label>
                            <input type="text" name="lama_belajar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Pindah Sekolah</label>
                            <input type="text" name="pindah_sekolah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alasan Pindah Sekolah</label>
                            <input type="text" name="alasan_pindah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Bidang Study Keahlian</label>
                            <select class="form-control" name="bidang_study">
                                <option>-Bidang Study-</option>
                                <option>Teknik Komputer dan Jaringan</option>
                                <option>Administrasi Perkantoran</option>
                                <option>Akuntansi</option>
                                <option>Marketing/Pemasaran</option>
                                <option>Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kompetensi Keahlian</label>
                            <select class="form-control" name="kompetensi_keahlian">
                                <option>-Kompetensi Keahlian-</option>
                                <option>Teknik Komputer dan Jaringan</option>
                                <option>Administrasi Perkantoran</option>
                                <option>Akuntansi</option>
                                <option>Marketing/Pemasaran</option>
                                <option>Multimedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Masuk SMK Negeri 1 Jogonalan Klaten</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tgl_masuk" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tgl_masuk_sekolah">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <a href="index.php?halaman=keterangandatadiri" class="btn btn-warning"><i class="fa fa-caret-square-o-left"></i>&nbsp; Kembali</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4 col-sm-4">
                        <button class="btn btn-success" name="submit" style="float: right;"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
