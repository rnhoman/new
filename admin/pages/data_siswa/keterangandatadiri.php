<div class="callout callout-warning">
  <h3><i class="fa fa-bullhorn"></i>&nbsp; HARAP DIPERHATIKAN PEMBERITAHUAN</h3>
  <p style="text-align: justify;">Ketentuan pengisian data siswa/siswi kelas XII SMK Negeri 1 Jogonalan Klaten</p>
</div>
<div class="row">
  <div class="col-md-10 col-md-offset-1 col-sm-4 col-sm-offset-0">
    <div class="box box-info">
      <div class="callout callout-info">
        <h2 style="text-align: center;">Biodata Siswa/Siswi SMK N 1 Jogonalan Klaten</h2>
      </div>
      <div class="box-body">
        <form method="POST" enctype="multipart/form-data">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nomor Induk Siswa (NIS)</label>
              <input type="text" name="nis" class="form-control">
            </div>
            <div class="form-group">
              <label>Nomor Induk Siswa Nasional (NISN)</label>
              <input type="text" name="nisn" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_lengkap_siswa" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Panggilan</label>
              <input type="text" name="nama_panggilan_siswa" class="form-control">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" name="jk_siswa">
                <option>-Jenis Kelamin-</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tempat/Tanggal/Lahir</label>
              <div class="row">
                <div class="col-xs-6">
                  <input type="text" name="tempat_lahir_siswa" class="form-control" placeholder="Tempat Lahir">
                </div>
                <div class="col-xs-6">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control datepicker" name="tgl_lahir_siswa">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Umur Siswa</label>
              <input type="text" name="umur_siswa" class="form-control">
            </div>
            <div class="form-group">
              <label>Agama</label>
              <select class="form-control" name="agama_siswa">
                <option>-Pilih Agama-</option>
                <option>Islam</option>
                <option>Katholik</option>
                <option>Kristen</option>
                <option>Hindu</option>
              </select>
            </div>
            <div class="form-group">
              <label>Kewarganegaraan</label>
              <input type="text" name="kewarganegaraan_siswa" class="form-control">
              <p class="help-block">Example : Indonesia</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Anak Ke-</label>
              <input type="text" name="anakke_siswa" class="form-control">
            </div>
            <div class="form-group">
              <label>Jumlah Saudara</label>
              <div class="row">
                <div class="col-xs-3">
                  <label>Kandung</label>
                  <input type="text" name="jmlh_saudara_kndng" class="form-control" placeholder="Kandung">
                </div>
                <div class="col-xs-3">
                  <label>Tiri</label>
                  <input type="text" name="jmlh_saudara_tiri" class="form-control" placeholder="Tiri">
                </div>
                <div class="col-xs-3">
                  <label>Angkat</label>
                  <input type="text" name="jmlh_saudara_angkat" class="form-control" placeholder="Angkat">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Anak Yatim</label>
              <div>
                <label>
                  <input type="radio" name="anak_siswa" class="minimal" value="yatim" checked>
                  &nbsp; Yatim
                </label><br>
                <label>
                  <input type="radio" name="anak_siswa" class="minimal" value="piatu">
                  &nbsp; Piatu
                </label><br>
                <label>
                  <input type="radio" name="anak_siswa" class="minimal" value="yatim piatu">
                  &nbsp; Yatim Piatu
                </label><br>
                <label>
                  <input type="radio" name="anak_siswa" class="minimal" value="tidak">
                  &nbsp; Tidak
                </label>
              </div>
            </div>
            <div class="form-group">
              <label>Bahasa Sehari-hari</label>
              <input type="text" name="bhsa_sehari" class="form-control" placeholder="Bahasa Sehari-hari">
            </div>
            <div class="form-group">
              <label>Alamat Lengkap Saat ini</label>
              <textarea class="form-control" name="alamat_siswa" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label>Nomor Telepon/handphone</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="number" name="no_hp" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label>Saat Ini Tinggal Bersama</label>
              <input type="text" name="tinggal_bersama" class="form-control">
              <p class="help-block">example : Orang Tua</p>
            <!-- <div>
              <label>
                <input type="radio" name="tnggl_bersama" class="minimal" value="yatim" checked>
                Orang Tua
              </label><br>
              <label>
                <input type="radio" name="tnggl_bersama" class="minimal" value="piatu">
                Saudara
              </label><br>
              <label>
                <input type="radio" name="tnggl_bersama" class="minimal" value="Asramah">
                Asramah
              </label>
              <label>
                <input type="radio" name="tnggl_bersama" class="minimal" value="Asramah">
                Kost/Kontrakan
              </label>
            </div> -->
            </div>
          </div>
          <div class="col-md-4" >
            <div class="form-group">
              <a href="index.php?halaman=data_siswa" class="btn btn-danger" onClick='return confirm("Apakah anda ingin membatalkannya?")' ><i class="fa fa-ban"></i>&nbsp; Batal</a>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-4 col-sm-4" >
            <a href="index.php?halaman=ketsehatanpendidikanterakhir" class="btn btn-success" onClick='return confirm("Apakah sudah benar? jika sudah maka lanjut ketahap berikutnya")' style="float: right;" ><i class="fa fa-save"></i>&nbsp; Selanjutnya</a>
            <!-- <button class="btn btn-success" name="simpanbioadata" style="float: right;"><i class="fa fa-save"></i>&nbsp; Selanjutnya</button> -->
            <!-- <input type="submit" name="lanjut" class="btn btn-success fa fa-save" value="Next" style="float: right;"> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>