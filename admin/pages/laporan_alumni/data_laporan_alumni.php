<?php 
include '../../../config/class.php';

$id_tahun = $_POST['id_tahun'];
$nama_jurusan = $_POST['nama_jurusan'];

if ($nama_jurusan=="semua jurusan") 
{
    $data_alumni = $perkelasan_alumni->detail_perkelasan_tahun($id_tahun);
}
else
{
    $data_alumni = $perkelasan_alumni->detail_perkelasan_tahun_jurusan($id_tahun,$nama_jurusan);
}
?>


<?php foreach ($data_alumni as $key => $value): ?>

    <?php $nis = $value['nis']; ?>
    <?php $data_ortu = $alumni->ambil_orang_tua_alumni($nis); ?>
    <?php $data_wali = $alumni->ambil_wali_alumni($nis); ?>
    <?php $data_perkembangan_siswa = $alumni->ambil_perkembangan_alumni($nis); ?>
    <?php $data_alumni = $alumni->ambil_data_alumni($nis); ?>
    <tr>
        <td><?php echo $key+1; ?></td>
        <td class="nis"><?php echo $value['nis']; ?></td>
        <td class="nisn"><?php echo $value['nisn']; ?></td>
        <td class="nama"><?php echo $value['nama_lengkap']; ?></td>
        <td class="napal"><?php echo $value['nama_panggilan']; ?></td>
        <td class="email"><?php echo $value['email']; ?></td>
        <td class="agama" style="text-align: center;"><?php echo $value['agama_siswa']; ?></td>
        <td class="jk"><?php echo $value['jk_siswa']; ?></td>
        <td class="tempat_lahir"><?php echo $value['tempat_lahir_siswa']; ?></td>
        <td class="ttl"><?php echo $value['tempat_lahir_siswa'].", ".date("d-M-Y", strtotime($value['tgl_lahir_siswa'])); ?></td>
        <td class="kewarganegaraan"><?php echo $value['kewarganegaraan_siswa']; ?></td>
        <td class="anakke" style="text-align: center;"><?php echo $value['anakke_siswa']; ?></td>
        <td class="kandung" style="text-align: center;"><?php echo $value['jmlh_saudara_kndng']; ?></td>
        <td class="tiri" style="text-align: center;"><?php echo $value['jmlh_saudara_tiri']; ?></td>
        <td class="angkat" style="text-align: center;"><?php echo $value['jmlh_saudara_angkat']; ?></td>
        <td class="yatim_piatu" style="text-align: center;"><?php echo $value['anak_siswa']; ?></td>
        <td class="bahasa" style="text-align: center;"><?php echo $value['bhsa_sehari']; ?></td>
        <td class="alamat"><?php echo $value['alamat_siswa']; ?></td>
        <td class="nope"><?php echo $value['no_hp']; ?></td>
        <td class="tinggalbersama"><?php echo $value['tinggal_bersama']; ?></td>
        <td class="jarak"><?php echo $value['jarak_rumah']; ?></td>
        <td class="goldar"><?php echo $value['golongan_darah']; ?></td>
        <td class="penyakit"><?php echo $value['penyakit_siswa']; ?></td>
        <td class="kelaian"><?php echo $value['kelainan_jasmani']; ?></td>
        <td class="tbdanbb"><?php echo $value['tinggi_badan']."/".$value['berat_badan']; ?></td>
        <td class="lulusan"><?php echo $value['lulusan_dari']; ?></td>
        <td class="tglnoijazah"><?php echo date("d-M-Y", strtotime($value['tgl_ijazah']))." / ". $value['no_ijazah']; ?></td>
        <td class="tglnostl"><?php echo $value['tgl_no_stl']; ?></td>
        <td class="lama"><?php echo $value['lama_belajar']; ?></td>
        <td class="darisekolah"><?php echo $value['pindah_sekolah']; ?></td>
        <td class="alasan"><?php echo $value['alasan_pindah']; ?></td>
        <td class="terima"><?php echo $value['terima_ditingkat']; ?></td>
        <td class="study"><?php echo $value['bidang_study']; ?></td>
        <td class="kompetensi"><?php echo $value['kompetensi_keahlian']; ?></td>
        <td class="msksklh"><?php echo date("d-M-Y", strtotime($value['tgl_masuk_sekolah'])); ?></td>

        <!-- ./ Orang Tua -->
        <td class="nama_ayah"><?php echo $data_ortu['nama_ayah_siswa']; ?></td>
        <td class="ttl_ayah"><?php echo $data_ortu['tempat_lahir_ayah'].", ".date('d-M-Y', strtotime($data_ortu['tgl_lahir_ayah'])); ?></td>
        <td class="agama_ayah"><?php echo $data_ortu['agama_ayah']; ?></td>
        <td class="kewarga_ayah"><?php echo $data_ortu['kewarganegaraan_ayah']; ?></td>
        <td class="pendidikan_ayah"><?php echo $data_ortu['pendidikan_ayah']; ?></td>
        <td class="kerja_ayah"><?php echo $data_ortu['pekerjaan_ayah']; ?></td>
        <td class="gaji_ayah"><?php echo $data_ortu['penghasilan_perbulan_ayah']; ?></td>
        <td class="alamat_ayah"><?php echo $data_ortu['alamat_rumah_ayah']." / ". $data_ortu['no_tlp_ayah']; ?></td>
        <td class="keadaan_ayah"><?php echo $data_ortu['keadaan_ayah']; ?></td>
        <td class="nama_ibu"><?php echo $data_ortu['nama_ibu_siswa']; ?></td>
        <td class="ttl_ibu"><?php echo $data_ortu['tempat_lahir_ibu'].", ".date('d-M-Y', strtotime($data_ortu['tgl_lahir_ibu'])); ?></td>
        <td class="agama_ibu"><?php echo $data_ortu['agama_ibu']; ?></td>
        <td class="kewarga_ibu"><?php echo $data_ortu['kewarganegaraan_ibu']; ?></td>
        <td class="pendidikan_ibu"><?php echo $data_ortu['pendidikan_ibu']; ?></td>
        <td class="kerja_ibu"><?php echo $data_ortu['pekerjaan_ibu']; ?></td>
        <td class="gaji_ibu"><?php echo $data_ortu['penghasilan_perbulan_ibu']; ?></td>
        <td class="alamat_ibu"><?php echo $data_ortu['alamat_rumah_ibu']." / ". $data_ortu['no_tlp_ibu']; ?></td>
        <td class="keadaan_ibu"><?php echo $data_ortu['keadaan_ibu']; ?></td>

        <!-- ./ Wali Siswa -->
        <td class="nama_wali"><?php echo $data_wali['nama_wali_siswa']; ?></td>
        <td class="ttl_wali"><?php echo $data_wali['tempat_lahir_wali_siswa'].", ". date("d-M-Y", strtotime($data_wali['tgl_lahir_wali_siswa'])); ?></td>
        <td class="agama_wali"><?php echo $data_wali['agama_wali_siswa']; ?></td>
        <td class="kewarga_wali"><?php echo $data_wali['kewarganegaraan_wali_siswa']; ?></td>
        <td class="pendidikan_wali"><?php echo $data_wali['pendidikan_wali_siswa']; ?></td>
        <td class="kerja_wali"><?php echo $data_wali['pekerjaan_wali_siswa']; ?></td>
        <td class="gaji_wali"><?php echo $data_wali['penghasilan_perbulan_wali_siswa']; ?></td>
        <td class="alamat_wali"><?php echo $data_wali['alamat_wali_siswa']." / ". $data_wali['no_tlp_wali_siswa']; ?></td>

        <!-- ./ Perkembangan Siswa -->
        <td class="seni"><?php echo $data_perkembangan_siswa['kesenian']; ?></td>
        <td class="raga"><?php echo $data_perkembangan_siswa['olahraga']; ?></td>
        <td class="organ"><?php echo $data_perkembangan_siswa['organisasi']; ?></td>
        <td class="lain"><?php echo $data_perkembangan_siswa['hobi_lain']; ?></td>
        <td class="beasis"><?php echo $data_perkembangan_siswa['tahun_beasiswa']." - ".$data_perkembangan_siswa['tingkat_beasiswa']." - ".$data_perkembangan_siswa['dari_beasiswa']; ?></td>
        <td class="meniggalkan_sklh"><?php echo date('d-M-Y', strtotime($data_perkembangan_siswa['tgl_meninggalkan_sklh'])); ?></td>
        <td class="alasan_sklh"><?php echo $data_perkembangan_siswa['alasan_meninggalkan_sklh']; ?></td>

        <!-- ./ Data Alumni -->
        <td class="kegiatan_lulus"><?php echo $data_alumni['kegiatan_setelah_lulus'] ?></td>
        <td class="nama_univ"><?php echo $data_alumni['nama_universitas']; ?></td>
        <td class="fal"><?php echo $data_alumni['fakultas_universitas']; ?></td>
        <td class="jur"><?php echo $data_alumni['jurusan_universitas']; ?></td>
        <td class="alamat_univ"><?php echo $data_alumni['alamat_universitas']; ?></td>
        <td class="nope_univ"><?php echo $data_alumni['no_tlp_universitas']; ?></td>
        <td class="nama_usaha"><?php echo $data_alumni['nama_wirausaha']; ?></td>
        <td class="alamat_usaha"><?php echo $data_alumni['alamat_wirausaha']; ?></td>
        <td class="nope_usaha"><?php echo $data_alumni['no_hp_wirausaha']; ?></td>
        <td class="nama_instan"><?php echo $data_alumni['nama_instansi']; ?></td>
        <td class="alamat_instan"><?php echo $data_alumni['alamat_instansi']; ?></td>
        <td class="masuk_kerja"><?php echo date('d-M-Y', strtotime($data_alumni['tgl_mulai_kerja'])); ?></td>
        <td class="selesai_kerja"><?php echo date('d-M-Y', strtotime($data_alumni['tgl_selesai_kerja'])); ?></td>

    </tr>
<?php endforeach ?>