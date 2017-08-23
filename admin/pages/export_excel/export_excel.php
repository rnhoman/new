<?php 
include '../../../config/class.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil.xls");

$data_alumni = $perkelasan_alumni->detail_perkelasan_tahun($_GET['id']);

if (isset($_GET['jurusan']) and !empty($_GET['jurusan']) and $_GET['jurusan']!=="semua jurusan") 
{
    $data_alumni = $perkelasan_alumni->detail_perkelasan_tahun($_GET['id'], $_GET['jurusan']);
}
else
{
    $data_alumni = $perkelasan_alumni->detail_perkelasan_tahun($_GET['id']);
}
?>
<tableable table-bordered" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>NISN</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Email</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tempat/Tgl/Lahir</th>
            <th>Kewarganegaraan</th>
            <th>Anak Ke-</th>
            <th>Jumlah Saudara Kandung</th>
            <th>Jumlah Saudara Tiri</th>
            <th>Jumlah Saudara Angkat</th>
            <th>Anak Yatim/Piatu/Yatim Piatu</th>
            <th>Bahasa Sehari-hari</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Tinggal dengan orang tua/saudara</th>
            <th>Jarak rumah dengan tempat tinggal</th>
            <th>Golongan Darah</th>
            <th>Penyakit yang pernah di derita, TBC/Cacar/ Malaria dll</th>
            <th>Kelainan Jasmani</th>
            <th>Tinggi dan berat badan</th>
            <th>Lulusan dari</th>
            <th>Tanggal dan Nomor Ijazah</th>
            <th>Tanggal dan Nomor STL</th>
            <th>Lama Belajar</th>
            <th>Dari Sekolah</th>
            <th>Alasan</th>
            <th>Ditingkat</th>
            <th>Bidang Study Keahlian</th>
            <th>Kompetensi Keahlian</th>
            <th>Tgl Masuk Sekolah</th>

            <!-- ./ Orang Tua -->
            <th>Nama Ayah</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Penghasilan Perbulan</th>
            <th>Alamat Rumah/Nomor Telepon</th>
            <th>Masih Hidup/Sudah Meninggal</th>
            <th>Nama Ibu</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Penghasilan Perbulan</th>
            <th>Alamat Rumah/Nomor Telepon</th>
            <th>Masih Hidup/Sudah Meninggal</th>

            <!-- ./ Wali Siswa -->
            <th>Nama Wali</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Penghasilan Perbulan</th>
            <th>Alamat Rumah/Nomor Telepon</th>

            <!-- ./ Perkembangan Siswa -->
            <th>Kesenian</th>
            <th>Olah Raga</th>
            <th>Kemasyarakat/Organisasi</th>
            <th>Lain-lain</th>
            <th>Beasiswa Tahun-tingkat-dari</th>
            <th>Tanggal Meninggalkan Sekolah</th>
            <th>Alasan Meniggalkan Sekolah</th>

            <!-- ./ Data Alumni -->
            <th>Kegiatan Setelah Lulus</th>
            <th>Nama Perguruan Tinggi/Universitas</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Alamat Perguruan Tinggi/Universitas</th>
            <th>Nomor Telepon</th>
            <th>Nama Wirausaha</th>
            <th>Alamat Wirausaha</th>
            <th>Nomor Telepon Wirausaha</th>
            <th>Nama Instansi/Perusahaan</th>
            <th>Alamat Instansi/Perusahaan</th>
            <th>Tanggal Mulai Kerja</th>
            <th>Tanggal Selesai Kerja</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_alumni as $key => $value): ?>
            <?php $nis = $value['nis']; ?>
            <?php $data_ortu = $alumni->ambil_orang_tua_alumni($nis); ?>
            <?php $data_wali = $alumni->ambil_wali_alumni($nis); ?>
            <?php $data_perkembangan_siswa = $alumni->ambil_perkembangan_alumni($nis); ?>
            <?php $data_alumni = $alumni->ambil_data_alumni($nis); ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value['nis']; ?></td>
                <td><?php echo $value['nisn']; ?></td>
                <td><?php echo $value['nama_lengkap']; ?></td>
                <td><?php echo $value['nama_panggilan']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td style="text-align: center;"><?php echo $value['agama_siswa']; ?></td>
                <td><?php echo $value['jk_siswa']; ?></td>
                <td><?php echo $value['tempat_lahir_siswa']; ?></td>
                <td><?php echo $value['tempat_lahir_siswa'].", ". $value['tgl_lahir_siswa']; ?></td>
                <td><?php echo $value['kewarganegaraan_siswa']; ?></td>
                <td style="text-align: center;"><?php echo $value['anakke_siswa']; ?></td>
                <td style="text-align: center;"><?php echo $value['jmlh_saudara_kndng']; ?></td>
                <td style="text-align: center;"><?php echo $value['jmlh_saudara_tiri']; ?></td>
                <td style="text-align: center;"><?php echo $value['jmlh_saudara_angkat']; ?></td>
                <td style="text-align: center;"><?php echo $value['anak_siswa']; ?></td>
                <td style="text-align: center;"><?php echo $value['bhsa_sehari']; ?></td>
                <td><?php echo $value['alamat_siswa']; ?></td>
                <td><?php echo $value['no_hp']; ?></td>
                <td><?php echo $value['tinggal_bersama']; ?></td>
                <td><?php echo $value['jarak_rumah']; ?></td>
                <td><?php echo $value['golongan_darah']; ?></td>
                <td><?php echo $value['penyakit_siswa']; ?></td>
                <td><?php echo $value['kelainan_jasmani']; ?></td>
                <td><?php echo $value['tinggi_badan']."/".$value['berat_badan']; ?></td>
                <td><?php echo $value['lulusan_dari']; ?></td>
                <td><?php echo date("d-M-Y", strtotime($value['tgl_ijazah']))." ". $value['no_ijazah']; ?></td>
                <td><?php echo $value['tgl_no_stl']; ?></td>
                <td><?php echo $value['lama_belajar']; ?></td>
                <td><?php echo $value['pindah_sekolah']; ?></td>
                <td><?php echo $value['terima_ditingkat']; ?></td>
                <td><?php echo $value['alasan_pindah']; ?></td>
                <td><?php echo $value['bidang_study']; ?></td>
                <td><?php echo $value['kompetensi_keahlian']; ?></td>
                <td><?php echo date("d-M-Y", strtotime($value['tgl_masuk_sekolah'])); ?></td>

                <!-- ./ Orang Tua -->
                <td><?php echo $data_ortu['nama_ayah_siswa']; ?></td>
                <td><?php echo $data_ortu['tempat_lahir_ayah'].", ".date('d-M-Y', strtotime($data_ortu['tgl_lahir_ayah'])); ?></td>
                <td><?php echo $data_ortu['agama_ayah']; ?></td>
                <td><?php echo $data_ortu['kewarganegaraan_ayah']; ?></td>
                <td><?php echo $data_ortu['pendidikan_ayah']; ?></td>
                <td><?php echo $data_ortu['pekerjaan_ayah']; ?></td>
                <td><?php echo $data_ortu['penghasilan_perbulan_ayah']; ?></td>
                <td><?php echo $data_ortu['alamat_rumah_ayah']." / ". $data_ortu['no_tlp_ayah']; ?></td>
                <td><?php echo $data_ortu['keadaan_ayah']; ?></td>
                <td><?php echo $data_ortu['nama_ibu_siswa']; ?></td>
                <td><?php echo $data_ortu['tempat_lahir_ibu'].", ".date('d-M-Y', strtotime($data_ortu['tgl_lahir_ibu'])); ?></td>
                <td><?php echo $data_ortu['agama_ibu']; ?></td>
                <td><?php echo $data_ortu['kewarganegaraan_ibu']; ?></td>
                <td><?php echo $data_ortu['pendidikan_ibu']; ?></td>
                <td><?php echo $data_ortu['pekerjaan_ibu']; ?></td>
                <td><?php echo $data_ortu['penghasilan_perbulan_ibu']; ?></td>
                <td><?php echo $data_ortu['alamat_rumah_ibu']." / ". $data_ortu['no_tlp_ibu']; ?></td>
                <td><?php echo $data_ortu['keadaan_ibu']; ?></td>

                <!-- ./ Wali Siswa -->
                <td><?php echo $data_wali['nama_wali_siswa']; ?></td>
                <td><?php echo $data_wali['tempat_lahir_wali_siswa'].", ". date("d-M-Y", strtotime($data_wali['tgl_lahir_wali_siswa'])); ?></td>
                <td><?php echo $data_wali['agama_wali_siswa']; ?></td>
                <td><?php echo $data_wali['kewarganegaraan_wali_siswa']; ?></td>
                <td><?php echo $data_wali['pendidikan_wali_siswa']; ?></td>
                <td><?php echo $data_wali['pekerjaan_wali_siswa']; ?></td>
                <td><?php echo $data_wali['penghasilan_perbulan_wali_siswa']; ?></td>
                <td><?php echo $data_wali['alamat_wali_siswa']." / ". $data_wali['no_tlp_wali_siswa']; ?></td>

                <!-- ./ Perkembangan Siswa -->
                <td><?php echo $data_perkembangan_siswa['kesenian']; ?></td>
                <td><?php echo $data_perkembangan_siswa['olahraga']; ?></td>
                <td><?php echo $data_perkembangan_siswa['organisasi']; ?></td>
                <td><?php echo $data_perkembangan_siswa['hobi_lain']; ?></td>
                <td><?php echo $data_perkembangan_siswa['tahun_beasiswa']." - ".$data_perkembangan_siswa['tingkat_beasiswa']." - ".$data_perkembangan_siswa['dari_beasiswa']; ?></td>
                <td><?php echo date('d-M-Y', strtotime($data_perkembangan_siswa['tgl_meninggalkan_sklh'])); ?></td>
                <td><?php echo $data_perkembangan_siswa['alasan_meninggalkan_sklh']; ?></td>

                <!-- ./ Data Alumni -->
                <td><?php echo $data_alumni['kegiatan_setelah_lulus'] ?></td>
                <td><?php echo $data_alumni['nama_universitas']; ?></td>
                <td><?php echo $data_alumni['fakultas_universitas']; ?></td>
                <td><?php echo $data_alumni['jurusan_universitas']; ?></td>
                <td><?php echo $data_alumni['alamat_universitas']; ?></td>
                <td><?php echo $data_alumni['no_tlp_universitas']; ?></td>
                <td><?php echo $data_alumni['nama_wirausaha']; ?></td>
                <td><?php echo $data_alumni['alamat_wirausaha']; ?></td>
                <td><?php echo $data_alumni['no_hp_wirausaha']; ?></td>
                <td><?php echo $data_alumni['nama_instansi']; ?></td>
                <td><?php echo $data_alumni['alamat_instansi']; ?></td>
                <td><?php echo date('d-M-Y', strtotime($data_alumni['tgl_mulai_kerja'])); ?></td>
                <td><?php echo date('d-M-Y', strtotime($data_alumni['tgl_selesai_kerja'])); ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>