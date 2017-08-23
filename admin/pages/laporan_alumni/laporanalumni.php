<?php 
$data_tahun = $tahun_ajaran_siswa->tampil_tahun_ajaran();

    // jika ada select didalam form dengan name tahun_ajaran maka
if (isset($_POST['tahun_ajaran'])) 
{
        // select dengan name tahun_ajaran yang ada di form di simpan di variabel tahun
    $tahun = $_POST['tahun_ajaran'];
}
else
{
        // mendafult bahwa $tahun bernilai kosong
    $tahun= "";
}

$data_alumni = $perkelasan_alumni->detail_perkelasan_tahun($tahun);

?>
<style>
    .tabel-gue, .tabel-gue td, .tabel-gue th
    {
        border-color: #111 !important;
    }
</style>

<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title">Laporan Data Alumni</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <!-- ./ Pilih Laporan -->
            <div class="col-md-4">
                <form method="POST" enctype="multipart/form-data" class="hidden-print">
                    <div class="form-group">
                        <label>Tahun Ajaran</label>
                        <select class="form-control" name="tahun_ajaran" >
                            <option>-Pilih Tahun Ajaran-</option>
                            <?php foreach ($data_tahun as $key => $value): ?>
                                <option value="<?php echo $value['id_tahun_ajaran']; ?>" <?php if ($tahun==$value['id_tahun_ajaran']) {echo "selected";} ?>><?php echo $value['tahun_ajaran']; ?></option>
                            <?php endforeach ?>

                        </select>

                        <?php 
                        $dftr_jurusan = $siswa_sekolah->ambil_jurusan();
                        ?>
                        <div class="form-group">
                            <label>Kompetensi Keahlian</label>
                            <select class="form-control" name="jurusan">
                                <option value="">-Pilih Jurusan-</option>
                                <option value="semua jurusan">Semua Jurusan</option>
                                <?php foreach ($dftr_jurusan as $key => $value): ?>
                                    <option value="<?php echo $value['kompetensi_keahlian']; ?>">
                                        <?php echo $value['kompetensi_keahlian']; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </form>
                <a onClick="print()" class="hidden-print btn btn-info"><i class="fa fa-print"></i>Cetak</a>
                <a id="linkexcel" class="hidden-print btn btn-success"><i class="fa fa-print"></i>Export Excel</a>
            </div>

            <!-- ./ Widget-->
            <div class="col-md-8">
                <!-- ./Biodata -->
                <div class="box box-info collapsed-box box-solid hidden-print">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Biodata Siswa</h3></center>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nis" disabled> NIS
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nisn" disabled> NISN
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nama" disabled> Nama lengkap
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="napal"> Nama panggilan
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="email"> Email
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="agama"> Agama
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="jk"> Jenis kelamin
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="tempat_lahir"> Tempat lahir
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="ttl"> Tempat/Tgl/Lahir
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kewarganegaraan"> Kewarganegaraan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="anakke"> Anak ke-
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kandung"> Jumlah saudara kandung
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="tiri"> Jumlah saudara tiri
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="angkat"> Jumlah saudara angkat
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="yatim_piatu"> Anak yatim/piatu
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="bahasa"> Bahasa sehari-hari
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alamat"> Alamat
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nope"> Nomor telepon
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="tinggalbersama"> Tinggal bersama
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="jarak"> Jarak rumah ke sekolah
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="goldar"> Golongan darah
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="penyakit"> Penyakit yang pernah diderita
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kelaian"> Kelainan jasmani
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="tbdanbb"> Tinggi berat badan
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="lulusan"> Lulusan dari
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="tglnoijazah"> Tgl dan nomor ijazah
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="tglnostl"> Tgl dan nomor STL
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="lama"> Lama belajar
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="darisekolah"> dari sekolah
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alasan"> Alasan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="terima"> Diterima ditingkat
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="study"> Bidang study
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kompetensi"> Kompetensi keahlian
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="msksklh"> Tgl masuk sekolah
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./End biodata -->

                <!-- ./Orang tua -->
                <div class="box box-primary collapsed-box box-solid hidden-print">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Orang Tua Siswa</h3></center>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nama_ayah"> Nama Lengkap Ayah
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="ttl_ayah"> Tempat/Tgl/Lahir
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="agama_ayah"> Agama 
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kewarga_ayah"> Kewarganegaraan
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="pendidikan_ayah"> Pendidikan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kerja_ayah"> Pekerjaan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="gaji_ayah"> Penghasilan Per bulan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alamat_ayah"> Alamat rumah/No tlp
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="keadaan_ayah"> Keadaan masih hidup/sudah meninggal
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nama_ibu"> Nama Lengkap Ibu
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="ttl_ibu"> Tempat/Tgl/Lahir
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="agama_ibu"> Agama
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kewarga_ibu"> Kewarganegaraan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="pendidikan_ibu"> Pendidikan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kerja_ibu"> Pekerjaan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="gaji_ibu"> Penghasilan Per bulan
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alamat_ibu"> Alamat rumah/Nomor tlp
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="keadaan_ibu"> Keadaan masih hidup/sudah meninggal
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./End Orang Tua -->

                <!-- ./Wali Siswa -->
                <div class="box box-warning collapsed-box box-solid hidden-print">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Wali Siswa</h3></center>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nama_wali"> Nama Lengkap Wali
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="ttl_wali"> Tempat/Tgl/Lahir
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="agama_wali"> Agama
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kewarga_wali"> Kewarganegaraan
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="pendidikan_wali"> Pendidikan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kerja_wali"> Pekerjaan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="gaji_wali"> Penghasilan Per bulan
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alamat_wali"> Alamat rumah/No tlp
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./End Wali Siswa -->

                <!-- ./Perkembangan Siswa -->
                <div class="box box-default collapsed-box box-solid hidden-print">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Perkembangan Siswa</h3></center>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="seni"> Kesenian
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="raga"> Olah Raga
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="organ"> Kemasyarakatn / Organisasi
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="lain"> Lain-Lain
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="beasis"> Beasiswa tahun-tingkat=dari
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="meniggalkan_sklh"> Tgl Meninggalkan Sekolah
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alasan_sklh"> Alasan Meniggalkan Sekolah
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- ./End Perkembangan Siswa -->

                <!-- ./Data Alumni -->
                <div class="box box-success collapsed-box box-solid hidden-print">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Data Alumni</h3></center>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="kegiatan_lulus"> Kegaitan setelah lulus
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nama_univ"> Nama universitas
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="fal"> Fakultas
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="jur"> Jurusan
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alamat_univ"> Alamat universitas
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nope_univ"> Nomor tlp universitas
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nama_usaha"> Nama wirausaha
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alamat_usaha"> Alamat wirausaha
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nope_usaha"> Nomor tlp wirausaha
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nope_univ"> Nomor Tlp Universitas
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="nama_instan"> Nama instansi
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="alamat_instan"> Alamat instansi
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="masuk_kerja"> Tgl masuk kerja
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" class="alumni" id="selesai_kerja"> Tgl selesai kerja
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./End Data Alumni -->
            </div>

        </div>
    </div>

    <!-- /.Table Laporan -->
    <div class="clearfix table-responsive">
        <table class="table table-bordered table-striped" >
            <thead>
                <!-- <tr>
                    <th colspan="36" class="text-center">LAPORAN SISWA ALUMNI</th>
                </tr> -->
                <tr>
                    <th>No</th>
                    <th class="nis">NIS</th>
                    <th class="nisn">NISN</th>
                    <th class="nama">Nama Lengkap</th>
                    <th class="napal">Nama Panggilan</th>
                    <th class="email">Email</th>
                    <th class="agama">Agama</th>
                    <th class="jk">Jenis Kelamin</th>
                    <th class="tempat_lahir">Tempat Lahir</th>
                    <th class="ttl">Tempat/Tgl/Lahir</th>
                    <th class="kewarganegaraan">Kewarganegaraan</th>
                    <th class="anakke">Anak Ke-</th>
                    <th class="kandung">Jumlah Saudara Kandung</th>
                    <th class="tiri">Jumlah Saudara Tiri</th>
                    <th class="angkat">Jumlah Saudara Angkat</th>
                    <th class="yatim_piatu">Anak Yatim/Piatu</th>
                    <th class="bahasa">Bahasa Sehari-hari</th>
                    <th class="alamat">Alamat</th>
                    <th class="nope">Nomor Telepon</th>
                    <th class="tinggalbersama">Tinggal Bersama dengan</th>
                    <th class="jarak">Jarak rumah ke Sekolah</th>
                    <th class="goldar">Golongan Darah</th>
                    <th class="penyakit">Penyakit yang pernah di derita</th>
                    <th class="kelaian">Kelainan Jasmani</th>
                    <th class="tbdanbb">Tinggi dan berat badan</th>
                    <th class="lulusan">Lulusan dari</th>
                    <th class="tglnoijazah">Tanggal dan Nomor Ijazah</th>
                    <th class="tglnostl">Tanggal dan Nomor STL</th>
                    <th class="lama">Lama Belajar</th>
                    <th class="darisekolah">Dari Sekolah</th>
                    <th class="alasan">Alasan</th>
                    <th class="terima">Diterima ditingkat</th>
                    <th class="study">Bidang Study Keahlian</th>
                    <th class="kompetensi">Kompetensi Keahlian</th>
                    <th class="msksklh">Tgl Masuk Sekolah</th>

                    <!-- ./ Orang Tua -->
                    <th class="nama_ayah">Nama Ayah</th>
                    <th class="ttl_ayah">Tempat Tanggal Lahir</th>
                    <th class="agama_ayah">Agama</th>
                    <th class="kewarga_ayah">Kewarganegaraan</th>
                    <th class="pendidikan_ayah">Pendidikan</th>
                    <th class="kerja_ayah">Pekerjaan</th>
                    <th class="gaji_ayah">Penghasilan Perbulan</th>
                    <th class="alamat_ayah">Alamat Rumah/Nomor Telepon</th>
                    <th class="keadaan_ayah">Masih Hidup/Sudah Meninggal</th>
                    <th class="nama_ibu">Nama Ibu</th>
                    <th class="ttl_ibu">Tempat Tanggal Lahir</th>
                    <th class="agama_ibu">Agama</th>
                    <th class="kewarga_ibu">Kewarganegaraan</th>
                    <th class="pendidikan_ibu">Pendidikan</th>
                    <th class="kerja_ibu">Pekerjaan</th>
                    <th class="gaji_ibu">Penghasilan Perbulan</th>
                    <th class="alamat_ibu">Alamat Rumah/Nomor Telepon</th>
                    <th class="keadaan_ibu">Masih Hidup/Sudah Meninggal</th>

                    <!-- ./ Wali Siswa -->
                    <th class="nama_wali">Nama Wali</th>
                    <th class="ttl_wali">Tempat Tanggal Lahir</th>
                    <th class="agama_wali">Agama</th>
                    <th class="kewarga_wali">Kewarganegaraan</th>
                    <th class="pendidikan_wali">Pendidikan</th>
                    <th class="kerja_wali">Pekerjaan</th>
                    <th class="gaji_wali">Penghasilan Perbulan</th>
                    <th class="alamat_wali">Alamat Rumah/Nomor Telepon</th>

                    <!-- ./ Perkembangan Siswa -->
                    <th class="seni">Kesenian</th>
                    <th class="raga">Olah Raga</th>
                    <th class="organ">Kemasyarakat/Organisasi</th>
                    <th class="lain">Lain-lain</th>
                    <th class="beasis">Beasiswa Tahun-tingkat-dari</th>
                    <th class="meniggalkan_sklh">Tanggal Meninggalkan Sekolah</th>
                    <th class="alasan_sklh">Alasan Meniggalkan Sekolah</th>

                    <!-- ./ Data Alumni -->
                    <th class="kegiatan_lulus">Kegiatan Setelah Lulus</th>
                    <th class="nama_univ">Nama Perguruan Tinggi/Universitas</th>
                    <th class="fal">Fakultas</th>
                    <th class="jur">Jurusan</th>
                    <th class="alamat_univ">Alamat Perguruan Tinggi/Universitas</th>
                    <th class="nope_univ">Nomor Telepon</th>
                    <th class="nama_usaha">Nama Wirausaha</th>
                    <th class="alamat_usaha">Alamat Wirausaha</th>
                    <th class="nope_usaha">Nomor Telepon Wirausaha</th>
                    <th class="nama_instan">Nama Instansi/Perusahaan</th>
                    <th class="alamat_instan">Alamat Instansi/Perusahaan</th>
                    <th class="masuk_kerja">Tanggal Mulai Kerja</th>
                    <th class="selesai_kerja">Tanggal Selesai Kerja</th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".alumni").on("change",function(){

            var idnya = $(this).attr("id");
            if (this.checked) 
            {
                $("."+idnya).hide(1000);
            }
            else
            {
                $("."+idnya).show(1000);
            }
        })
    })
</script>

<script>
    // memulai javascrip jika document siap
    $(document).ready(function(){
        $("select[name=tahun_ajaran]").on("change",function(){
            // mendapatkan id_tahun yang dipilih
            var id_tahun = $("select[name=tahun_ajaran]").val();
            $("#linkexcel").attr("href","pages/export_excel/export_excel.php?id="+id_tahun);

            $("select[name=jurusan]").val(null);
        });
    });

    // exekusi javascrip
    $(document).ready(function(){
        $("select[name=jurusan]").on("change",function(){
            //mendapatkan tahun yg dipilih
            var id_tahun = $("select[name=tahun_ajaran]").val();
            //mendapatkan nama jurusan yg dipilih
            var nama_jurusan = $("select[name=jurusan]").val();

            // menyentuh linkexcel untuk mengamvil attribut link "href","pages/export_excel/export_excel.php?id="+id_tahun
            $("#linkexcel").attr("href","pages/export_excel/export_excel.php?id="+id_tahun+"&jurusan="+nama_jurusan);

            // menggunakan ajax utk mendapatkan datanya
            $.ajax({
                type : 'POST',
                url : 'pages/laporan_alumni/data_laporan_alumni.php',
                data : 'id_tahun='+id_tahun+'&nama_jurusan='+nama_jurusan,
                success : function(hasil){
                    $("tbody").html(hasil);
                }
            })

        })
    })
</script>