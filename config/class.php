<?php 
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Jakarta');
/*=================================================*/
/*=========== KONEKSI KE DATABASE ============*/
/*=================================================*/
class utama
{
    public $koneksi;
    function __construct()
    {
        $this->koneksi= new mysqli("localhost","root","","backup");
    }
}

/*=================================================*/
/*=========== TABEL PENGUMUMAN EVENT ============*/
/*=================================================*/
class pengumuman_event extends utama
{
    function tampil_event($posisi=0, $batas=9999999999)
    {
        // mendefault banyak data
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM event ORDER BY id_event DESC LIMIT $posisi, $batas");
        while($pecah = $ambil->fetch_assoc())
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_event($id_event)
    {
        $ambil=$this->koneksi->query("SELECT * FROM event WHERE id_event='$id_event' ");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function simpan_event($judul_event, $isi_konten_event, $waktu_posting_event, $gambar_event)
    {
            // echo "<pre>";
            // print_r($gambar_event);
            // echo "</pre>";
        $namafoto = $gambar_event['name'];
        $lokasifoto = $gambar_event['tmp_name'];
        $namafiks = date("d_m_H_d_m_Y")."_".$namafoto;
        $extensifoto = pathinfo($namafiks, PATHINFO_EXTENSION);
        $extensiboleh = array("jpg","png","jpeg","gif","PNG","JPG");
        if(in_array($extensifoto, $extensiboleh))
        {
            move_uploaded_file($lokasifoto, "../assets/image/event/$namafiks");
            $this->koneksi->query("INSERT INTO event VALUES (NULL,'$judul_event','$isi_konten_event','$waktu_posting_event','$namafiks')");
            return "sukses";
        }
        else
        {
            return "gagal";
        }
    }
    function hapus_event($id)
    {
        $detailevent = $this->ambil_event($id);
        $fotohapus = $detailevent['gambar_event'];
        if (file_exists("../assets/image/event/$fotohapus")) 
        {
            unlink("../assets/image/event/$fotohapus");
                //unlink("../assets/image/event/$fotohapus");
        }
        $this->koneksi->query("DELETE FROM event WHERE id_event='$id' ");

    }
    function ubah_event($judul_event, $isi_konten_event, $waktu_posting_event, $gambar_event, $idevent)
    {
        $namafoto = $gambar_event['name'];
        $lokasifoto = $gambar_event['tmp_name'];
        if(!empty($lokasifoto))
        {
            $detailevent=$this->ambil_event($idevent);
            $fotolama = $detailevent['gambar_event'];
            if(file_exists("../assets/image/event/$fotolama"))
            {
                unlink("../assets/image/event/$fotolama");
            }
            $extensifoto = pathinfo($namafoto, PATHINFO_EXTENSION);
            $extensiboleh = array("jpg","png","jpeg","gif","PNG","JPG");
            if(in_array($extensifoto, $extensiboleh))
            {
                $namafiks = date("d_m_H_d_m_Y")."_".$namafoto;
                move_uploaded_file($lokasifoto, "../assets/image/event/$namafiks");
                $this->koneksi->query("UPDATE event SET judul_event='$judul_event', isi_konten_event='$isi_konten_event', waktu_posting_event='$waktu_posting_event', gambar_event='$namafiks' WHERE id_event='$idevent' ");
                return "sukses";
            }
            else
            {
                return "gagal";
            }
        }
        else
        {
            $this->koneksi->query("UPDATE event SET judul_event='$judul_event', isi_konten_event='$isi_konten_event', waktu_posting_event='$waktu_posting_event' WHERE id_event='$idevent'");
            return "sukses";
        }
    }
}

    //pemanggilan obyek
$pengumuman_event = new pengumuman_event();

/*=================================================*/
/*=====TABEL PENGUMUMAN LOWONGAN PEKERJAAN ======*/
/*=================================================*/
class pengumuman_loker extends utama
{
    function tampil_loker($posisi1=0, $batas1=9999999999)
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM lowongan_pekerjaan ORDER BY id_loker DESC LIMIT $posisi1, $batas1");
        while($pecah = $ambil->fetch_assoc())
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_loker($id_loker)
    {
        $ambil=$this->koneksi->query("SELECT * FROM lowongan_pekerjaan WHERE id_loker='$id_loker' ");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function simpan_loker($nama_pt_loker, $judul_loker, $isi_konten_loker, $waktu_posting_loker, $jatuh_tempo_loker, $nohp_loker, $gambar_loker, $status_loker)
    {

        $namafoto = $gambar_loker['name'];
        $lokasifoto = $gambar_loker['tmp_name'];
        $namafiks = date("d_m_H_d_m_Y")."_".$namafoto;
        $extensifoto = pathinfo($namafiks, PATHINFO_EXTENSION);
        $extensiboleh = array("jpg","png","jpeg","git","PNG","JPG");
        if (in_array($extensifoto, $extensiboleh)) 
        {
            move_uploaded_file($lokasifoto, "../assets/image/loker/$namafiks");
            $this->koneksi->query("INSERT INTO lowongan_pekerjaan VALUES (NULL,'$nama_pt_loker','$judul_loker','$isi_konten_loker','$waktu_posting_loker','$jatuh_tempo_loker','$nohp_loker','$namafiks', '$status_loker')");
            return "sukses";
        }
        else
        {
            return "gagal";
        }
    }
    function hapus_loker($id)
    {
        $detailloker = $this->ambil_loker($id);
        $fotohapus = $detailloker['gambar_loker'];
        if (file_exists("../assets/image/loker/$fotohapus")) 
        {
            //unlink("../assets/image/loker/$fotohapus");
            unlink("../assets/image/loker/$fotohapus");
        }
        $this->koneksi->query("DELETE FROM lowongan_pekerjaan WHERE id_loker='$id'");
    }
    function edit_loker($nama_pt_loker, $judul_loker, $jatuh_tempo_loker,$isi_konten_loker,$tgl,$nohp_loker,$gambar_loker,$status_loker,$idloker)
    {
        $namafoto = $gambar_loker['name'];
        $lokasifoto = $gambar_loker['tmp_name'];
        if (!empty($lokasifoto)) 
        {
            $detailloker=$this->ambil_loker($idloker);
            $fotolama=$detailloker['gambar_loker'];
            if (file_exists("../assets/image/loker/$fotolama")) 
            {
                unlink("../assets/image/loker/$fotolama");
            }
            $extensifoto = pathinfo($namafoto, PATHINFO_EXTENSION);
            $extensiboleh = array("jpg","png","jpeg","gif","PNG","JPG");
            if (in_array($extensifoto, $extensiboleh)) 
            {
                $namafiks = date("d_m_H_d_m_Y")."_".$namafoto;
                move_uploaded_file($lokasifoto, "../assets/image/loker/$namafiks");
                $this->koneksi->query("UPDATE lowongan_pekerjaan SET nama_pt_loker='$nama_pt_loker', judul_loker='$judul_loker',jatuh_tempo_loker='$jatuh_tempo_loker', isi_konten_loker='$isi_konten_loker',nohp_loker='$nohp_loker', gambar_loker='$namafiks', status_loker='$status_loker' WHERE id_loker='$idloker' ");
                return "sukses";
            }
            else
            {
                return "gagal";
            }
        }
        else
        {
            $this->koneksi->query("UPDATE lowongan_pekerjaan SET nama_pt_loker='$nama_pt_loker',judul_loker='$judul_loker', jatuh_tempo_loker='$jatuh_tempo_loker', isi_konten_loker='$isi_konten_loker', nohp_loker='$nohp_loker', status_loker='$status_loker' WHERE id_loker='$idloker' ")or die(mysqli_error($this->koneksi));
            // $this->koneksi->query("UPDATE lowongan_pekerjaan SET nama_pt_loker='$nama_pt_loker', judul_loker='$judul_loker', isi_konten_loker='$isi_konten_loker', jatuh_tempo_loker='$jatuh_tempo_loker', nohp_loker='$nohp_loker', status_loker='$status_loker' WHERE id_loker='$id_loker'");
            return "sukses";
        }
    }
}

    // Pemanggilan obyek
$pengumuman_loker = new pengumuman_loker();

/*=================================================*/
/*===============TABEL TAHUN AJARAN ===========*/
/*=================================================*/
class tahun_ajaran extends utama
{
    function tampil_tahun_ajaran()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM tahun_ajaran");
        while($pecah = $ambil->fetch_assoc())
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_tahun_ajaran($id_tahun_ajaran)
    {
        $ambil = $this->koneksi->query("SELECT * FROM tahun_ajaran WHERE id_tahun_ajaran='$id_tahun_ajaran'");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    function simpan_tahun_ajaran($tahun_ajaran)
    {
        // saat diinputkan tidak sama
        $ambil=$this->koneksi->query("SELECT * FROM tahun_ajaran WHERE tahun_ajaran='$tahun_ajaran'");
        $hasil = $ambil->num_rows;

        if ($hasil >= 1) 
        {
            return "gagal";
        }
        else
        {
            $this->koneksi->query("INSERT INTO tahun_ajaran(tahun_ajaran) VALUES('$tahun_ajaran')" );
            return "sukses";
        }

    }
    function hapus_tahun_ajaran($id_tahun_ajaran)
    {
        $ambil = $this->ambil_tahun_ajaran($id_tahun_ajaran);
        $this->koneksi->query("DELETE FROM tahun_ajaran WHERE id_tahun_ajaran='$id_tahun_ajaran' ");
    }
    function ubah_tahun_ajaran($tahun_ajaran, $id_tahun_ajaran)
    {
        // mengambil tahun berdasarkan id
        $diambil = $this->ambil_tahun_ajaran($id_tahun_ajaran);
        $tahun_ajaran_lama = $diambil['tahun_ajaran'];

        if($tahun_ajaran_lama==$tahun_ajaran)
        {
            $this->koneksi->query("UPDATE tahun_ajaran SET tahun_ajaran='$tahun_ajaran' WHERE id_tahun_ajaran='$id_tahun_ajaran' ");
            return 'sukses';
        }   
        else
        {
            $ambil=$this->koneksi->query("SELECT * FROM tahun_ajaran WHERE tahun_ajaran='$tahun_ajaran'")or die(mysqli_error($this->koneksi));
            $hasil = $ambil->num_rows;

            if ($hasil >= 1) 
            {
                return "gagal";
            }
            else
            {
                $this->koneksi->query("UPDATE tahun_ajaran SET tahun_ajaran='$tahun_ajaran' WHERE id_tahun_ajaran='$id_tahun_ajaran' ");
                return "sukses";
            }
        }

    }
}

    // Pemanggilan obyek tahun ajaran
$tahun_ajaran_siswa = new tahun_ajaran();


/*=================================================*/
/*========== TABEL KELAS DAN JURUSAN ===========*/
/*=================================================*/
class kelas_jurusan extends utama
{
    function tampil_kelas_jurusan()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM kelas_jurusan");
        while($pecah = $ambil->fetch_assoc())
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_kelas_jurusan($id_kelas)
    {
        $ambil=$this->koneksi->query("SELECT * FROM kelas_jurusan WHERE id_kelas='$id_kelas'");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function hapus_kelas_jurusan($id_kelas)
    {
        $ambil = $this->ambil_kelas_jurusan($id_kelas);
        $this->koneksi->query("DELETE FROM kelas_jurusan WHERE id_kelas='$id_kelas'");
    }
    function simpan_kelas_jurusan($nama_kelas, $jurusan_kelas)
    {
        $ambil=$this->koneksi->query("SELECT * FROM kelas_jurusan WHERE jurusan_kelas='$jurusan_kelas'");
        $hasil = $ambil->num_rows;

        if ($hasil >= 1) 
        {
            return "gagal";
        }
        else
        {
            $this->koneksi->query("INSERT INTO kelas_jurusan(nama_kelas, jurusan_kelas) VALUES ('$nama_kelas', '$jurusan_kelas')");
            return "sukses";
        }

    }
    function ubah_kelas_jurusan($nama_kelas,$jurusan_kelas, $id_kelas)
    {
        echo $jurusan_kelas;
        $ambil = $this->koneksi->query("SELECT * FROM kelas_jurusan WHERE jurusan_kelas='$jurusan_kelas'");
        $hasil = $ambil->num_rows;
        if ($hasil !== 1) 
        {
            $this->koneksi->query("UPDATE kelas_jurusan SET jurusan_kelas='$jurusan_kelas' WHERE id_kelas='$id_kelas' ")or die(mysqli_error($this->koneksi));
            return "sukses";
        }
        else
        {
            return "gagal";
        }
    }
}

    // Pemanggilan obyek kelas jurusan
$kelas_jurusan_alumni = new kelas_jurusan();


/*=================================================*/
/* TABEL PERKELASAN INNER JOIN PERKELASAN DETAIL */
/*=================================================*/
class perkelasan extends utama
{
    function tampil_perkelasan()
    {
        $bungkus = array();
        $ambil=$this->koneksi->query("SELECT * FROM tb_perkelasan JOIN kelas_jurusan ON tb_perkelasan.id_kelas=kelas_jurusan.id_kelas JOIN tahun_ajaran ON tb_perkelasan.id_tahun_ajaran=tahun_ajaran.id_tahun_ajaran")or die(mysqli_error($this->koneksi));
        while($pecah = $ambil->fetch_assoc())
        {
            $bungkus[]=$pecah;
        }
        return $bungkus;
    }
    function ambil_perkelasan_detail($idp)
    {
        $bungkus = array();
        $ambil = $this->koneksi->query("SELECT * FROM tb_perkelasan_detail JOIN data_siswa ON tb_perkelasan_detail.id_data_siswa=data_siswa.id_data_siswa WHERE id_perkelasan='$idp'")or die(mysqli_error($this->koneksi));
        while($pecah = $ambil->fetch_assoc())
        {
            $bungkus[]=$pecah;
        }
        return $bungkus;
    }
    function detail_perkelasan_tahun($id_tahun)
    {
        $semua_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM tb_perkelasan_detail JOIN tb_perkelasan ON tb_perkelasan_detail.id_perkelasan=tb_perkelasan.id_perkelasan JOIN data_siswa ON tb_perkelasan_detail.id_data_siswa=data_siswa.id_data_siswa  WHERE tb_perkelasan.id_tahun_ajaran='$id_tahun' AND status='Lulus' ");
        while ($pecah = $ambil->fetch_assoc()) 
        {
            $semua_data[] = $pecah;
        }
        return $semua_data;
    }
    function detail_perkelasan_tahun_jurusan($id_tahun,$nama_jurusan)
    {
        $semua_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM tb_perkelasan_detail JOIN tb_perkelasan ON tb_perkelasan_detail.id_perkelasan=tb_perkelasan.id_perkelasan JOIN data_siswa ON tb_perkelasan_detail.id_data_siswa=data_siswa.id_data_siswa  WHERE tb_perkelasan.id_tahun_ajaran='$id_tahun' AND status='Lulus' AND kompetensi_keahlian='$nama_jurusan' ");
        while ($pecah = $ambil->fetch_assoc()) 
        {
            $semua_data[] = $pecah;
        }
        return $semua_data;
    }
    function ambil_perkelasan($idp)
    {
        $ambil = $this->koneksi->query("SELECT * FROM tb_perkelasan JOIN kelas_jurusan ON tb_perkelasan.id_kelas=kelas_jurusan.id_kelas JOIN tahun_ajaran ON tb_perkelasan.id_tahun_ajaran=tahun_ajaran.id_tahun_ajaran WHERE id_perkelasan='$idp'");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function lulus_siswa($status, $siswa, $idp)
    {
        foreach ($siswa as $key => $value) 
        {
            $this->koneksi->query("UPDATE tb_perkelasan_detail SET status='$status' WHERE id_data_siswa='$key' AND id_perkelasan='$idp'");
        }
    }
    function simpan_siswa_detail($siswa, $idp)
    {
        foreach ($siswa as $key => $value) 
        {
            $this->koneksi->query("INSERT INTO tb_perkelasan_detail (id_data_siswa,id_perkelasan, status) VALUES ('$key','$idp','Siswa') ");
        }
    }
    function simpan_perkelasan ($kelas,$tahun_ajaran)
    {
        $ambil = $this->koneksi->query("SELECT * FROM tb_perkelasan WHERE id_kelas='$kelas' AND id_tahun_ajaran='$tahun_ajaran'");
        $hasil = $ambil->num_rows;
        if ($hasil < 1) 
        {
            $this->koneksi->query("INSERT INTO tb_perkelasan(id_kelas,id_tahun_ajaran) VALUES ('$kelas', '$tahun_ajaran')");
            return "sukses";
        }
        else
        {
            return "gagal";
        }
    }
    function hapus_perkelasan ($id_perkelasan)
    {
        $ambil = $this->ambil_perkelasan($id_kelas);
        $this->koneksi->query("DELETE FROM tb_perkelasan WHERE id_perkelasan='$id_perkelasan'");
    }
}

// Pemanggilan obyek perkelasan
$perkelasan_alumni = new perkelasan();


/*=================================================*/
/*========== TABEL KARTU ALUMNI ===========*/
/*=================================================*/
class kartu_alumni extends utama
{
    function tampil_kartu_alumni()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM kartu_alumni");
        while ($pecah = $ambil->fetch_assoc()) 
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
}

//Pemanggilan obyek
$kartu_alumni_sklh = new kartu_alumni();


/*=================================================*/
/*========== TABEL REGISTRASI ALUMNI ===========*/
/*=================================================*/
class regis_alumni extends utama
{
    function tampil_regis_alumni()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM registrasi_alumni JOIN data_siswa ON registrasi_alumni.nis=data_siswa.nis");
        while ($pecah=$ambil->fetch_assoc()) 
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_regis_alumni ($id_regis_alumni)
    {
        $ambil=$this->koneksi->query("SELECT * FROM registrasi_alumni WHERE id_regis_alumni='$id_regis_alumni'");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function ambil_regis_alumni_nis ($nis)
    {
        $ambil=$this->koneksi->query("SELECT * FROM registrasi_alumni WHERE nis='$nis' ");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function hapus_regis_alumni ($id_regis_alumni)
    {
        $ambil = $this->ambil_regis_alumni($id_regis_alumni);
        $this->koneksi->query("DELETE FROM registrasi_alumni WHERE id_regis_alumni='$id_regis_alumni'");
    }
    function simpan_regis_alumni ($nis,$nama_lengkap_alumni,$jk_alumni,$tempat_lahir_alumni,$agama_alumni,$alamat_alumni,$no_hp_alumni,$email_alumni,$kegiatan_setelah_lulus,$nama_universitas,$fakultas_universitas,$jurusan_universitas,$alamat_universitas,$no_tlp_universitas,$nama_wirausaha,$alamat_wirausaha,$no_hp_wirausaha,$nama_instansi,$tgl_mulai_kerja,$tgl_selesai_kerja,$alamat_instansi)
    {
        // saat diinputkan tidak sama
        $ambil=$this->koneksi->query("SELECT * FROM registrasi_alumni WHERE nis='$nis'");
        $hasil = $ambil->num_rows;

        if ($hasil ==0) 
        {
            $this->koneksi->query("INSERT INTO registrasi_alumni (nis,nama_lengkap_alumni,jk_alumni,tempat_lahir_alumni,agama_alumni,alamat_alumni,no_hp_alumni,email_alumni,kegiatan_setelah_lulus,nama_universitas,fakultas_universitas,jurusan_universitas,alamat_universitas,no_tlp_universitas,nama_wirausaha,alamat_wirausaha,no_hp_wirausaha,nama_instansi,tgl_mulai_kerja,tgl_selesai_kerja,alamat_instansi) VALUES('$nis','$nama_lengkap_alumni','$jk_alumni','$tempat_lahir_alumni','$agama_alumni','$alamat_alumni','$no_hp_alumni','$email_alumni','$kegiatan_setelah_lulus','$nama_universitas','$fakultas_universitas','$jurusan_universitas','$alamat_universitas','$no_tlp_universitas','$nama_wirausaha','$alamat_wirausaha','$no_hp_wirausaha','$nama_instansi','$tgl_mulai_kerja','$tgl_selesai_kerja','$alamat_instansi')" );
            $this->koneksi->query("UPDATE data_siswa SET status_siswa='alumni' WHERE nis='$nis'");
            return "sukses";
        }
        else
        {
            return "gagal";
        }
    }
    function edit_regis_alumni ($nis,$nama_lengkap_alumni,$jk_alumni,$tempat_lahir_alumni,$agama_alumni,$alamat_alumni,$no_hp_alumni,$email_alumni,$kegiatan_setelah_lulus,$nama_universitas,$fakultas_universitas,$jurusan_universitas,$alamat_universitas,$no_tlp_universitas,$nama_wirausaha,$alamat_wirausaha,$no_hp_wirausaha,$nama_instansi,$tgl_mulai_kerja,$tgl_selesai_kerja,$alamat_instansi,$id_regis_alumni)
    {
        $this->koneksi->query("UPDATE registrasi_alumni SET nis='$nis',nama_lengkap_alumni='$nama_lengkap_alumni' ,jk_alumni='$jk_alumni' ,tempat_lahir_alumni='$tempat_lahir_alumni' ,agama_alumni='$agama_alumni' ,alamat_alumni='$alamat_alumni' ,no_hp_alumni='$no_hp_alumni' ,email_alumni='$email_alumni' ,kegiatan_setelah_lulus='$kegiatan_setelah_lulus' ,nama_universitas='$nama_universitas' ,fakultas_universitas='$fakultas_universitas' ,jurusan_universitas='$jurusan_universitas' ,alamat_universitas='$alamat_universitas' ,no_tlp_universitas='$no_tlp_universitas' ,nama_wirausaha='$nama_wirausaha' ,alamat_wirausaha='$alamat_universitas' ,no_hp_wirausaha='$no_hp_wirausaha' ,nama_instansi='$nama_instansi',tgl_mulai_kerja='$tgl_masuk_sekolah' ,tgl_selesai_kerja='$tgl_selesai_kerja' ,alamat_instansi='$alamat_instansi' WHERE id_regis_alumni='$id_regis_alumni' ")or die (mysqli_error($this->koneksi));
        return "berhasil";
    }
}

//Pemanggilan obyek
$regist_alumni_sklh = new regis_alumni();


/*=================================================*/
/*========== TABEL DATA SISWA ===========*/
/*=================================================*/
class siswa extends utama
{
    function tampil_siswa()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM data_siswa");
        // $ambil = $this->koneksi->query("SELECT * FROM tb_detail_siswa JOIN tahun_ajaran ON tb_detail_siswa.id_tahun_ajaran=tahun_ajaran.id_tahun_ajaran JOIN kelas_jurusan ON tb_detail_siswa.id_kelas=kelas_jurusan.id_kelas")or die(mysqli_error($this->koneksi));
        while ($pecah = $ambil->fetch_assoc()) 
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_siswa($id_data_siswa)
    {
        $ambil = $this->koneksi->query("SELECT * FROM data_siswa WHERE id_data_siswa='$id_data_siswa'");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    function ambil_jurusan ()
    {
        $ambil = $this->koneksi->query("SELECT kompetensi_keahlian FROM data_siswa GROUP BY kompetensi_keahlian");
        while ($pecah= $ambil->fetch_assoc()) 
        {
            $semua_data [] = $pecah;
        }
        return $semua_data;
    }
    function hapus_siswa($id_data_siswa)
    {
        //$ambil = $this->ambil_siswa($id_data_siswa);
        $this->koneksi->query("DELETE FROM data_siswa WHERE id_data_siswa='$id_data_siswa'");
    }
    function tampil_nis_siswa($nis_awal,$nis_akhir)
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM data_siswa WHERE nis BETWEEN '$nis_awal' AND '$nis_akhir'");
        while ($pecah = $ambil->fetch_assoc()) 
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function simpan_siswa($nis,$nisn,$nama_lengkap,$nama_panggilan,$jk_siswa,$tempat_lahir_siswa,$tgl_lahir_siswa,/*$umur_siswa,*/$agama_siswa,$kewarganegaraan_siswa,$anakke_siswa,$jmlh_saudara_kndng,$jmlh_saudara_tiri,$jmlh_saudara_angkat,$anak_siswa,$bhsa_sehari,$alamat_siswa,$no_hp,$tinggal_bersama,$jarak_rumah,$golongan_darah,$penyakit_siswa,$kelainan_jasmani,$tinggi_badan,$berat_badan,$lulusan_dari,$tgl_ijazah,$no_ijazah,$tgl_no_stl,$lama_belajar,$pindah_sekolah,$terima_ditingkat,$alasan_pindah,$bidang_study,$kompetensi_keahlian,$tgl_masuk_sekolah)
    {
        $ambil=$this->koneksi->query("SELECT * FROM data_siswa WHERE nis='$nis'");
        $hasil = $ambil->num_rows;
        if ($hasil == 1) 
        {
            return "gagal";
        }
        else
        {
            $ambil_data = $this->koneksi->query("SELECT * FROM data_siswa WHERE nis='$nis' AND nama_lengkap='$nama_lengkap' ");
            $hasil_data = $ambil_data->num_rows;
            if ($hasil_data== 1) 
            {
                return 'gagal';
            }
            else 
            {
                $this->koneksi->query("INSERT INTO data_siswa(nis,nisn,nama_lengkap,nama_panggilan,jk_siswa,tempat_lahir_siswa,tgl_lahir_siswa,/*umur_siswa,*/agama_siswa,kewarganegaraan_siswa,anakke_siswa,jmlh_saudara_kndng,jmlh_saudara_tiri,jmlh_saudara_angkat,anak_siswa,bhsa_sehari,alamat_siswa,no_hp,tinggal_bersama,jarak_rumah,golongan_darah,penyakit_siswa,kelainan_jasmani,tinggi_badan,berat_badan,lulusan_dari,tgl_ijazah,no_ijazah,tgl_no_stl,lama_belajar,pindah_sekolah,terima_ditingkat,alasan_pindah,bidang_study,kompetensi_keahlian,tgl_masuk_sekolah) VALUES ('$nis','$nisn','$nama_lengkap','$nama_panggilan','$jk_siswa','$tempat_lahir_siswa','$tgl_lahir_siswa',/*'$umur_siswa',*/'$agama_siswa','$kewarganegaraan_siswa','$anakke_siswa','$jmlh_saudara_kndng','$jmlh_saudara_tiri','$jmlh_saudara_angkat','$anak_siswa','$bhsa_sehari','$alamat_siswa','$no_hp','$tinggal_bersama','$jarak_rumah','$golongan_darah','$penyakit_siswa','$kelainan_jasmani','$tinggi_badan','$berat_badan','$lulusan_dari','$tgl_ijazah','$no_ijazah','$tgl_no_stl','$lama_belajar','$pindah_sekolah','$terima_ditingkat','$alasan_pindah','$bidang_study','$kompetensi_keahlian','$tgl_masuk_sekolah')");
                return 'berhasil';
            }
        }
        
    }
    function ubah_siswa($nis,$nisn,$nama_lengkap,$nama_panggilan,$jk_siswa,$tempat_lahir_siswa,$tgl_lahir_siswa,/*$umur_siswa,*/$agama_siswa,$kewarganegaraan_siswa,$anakke_siswa,$jmlh_saudara_kndng,$jmlh_saudara_tiri,$jmlh_saudara_angkat,$anak_siswa,$bhsa_sehari,$alamat_siswa,$no_hp,$tinggal_bersama,$jarak_rumah,$golongan_darah,$penyakit_siswa,$kelainan_jasmani,$tinggi_badan,$berat_badan,$lulusan_dari,$tgl_ijazah,$no_ijazah,$tgl_no_stl,$lama_belajar,$pindah_sekolah,$terima_ditingkat,$alasan_pindah,$bidang_study,$kompetensi_keahlian,$tgl_masuk_sekolah,$id_data_siswa)
    {
        $this->koneksi->query("UPDATE data_siswa SET nis='$nis',nisn='$nisn',nama_lengkap='$nama_lengkap',nama_panggilan='$nama_panggilan',jk_siswa='$jk_siswa',tempat_lahir_siswa='$tempat_lahir_siswa',tgl_lahir_siswa='$tgl_lahir_siswa',/*umur_siswa='$umur_siswa',*/agama_siswa='$agama_siswa',kewarganegaraan_siswa='$kewarganegaraan_siswa',anakke_siswa='$anakke_siswa',jmlh_saudara_kndng='$jmlh_saudara_kndng',jmlh_saudara_tiri='$jmlh_saudara_tiri',jmlh_saudara_angkat='$jmlh_saudara_angkat',anak_siswa='$anak_siswa',bhsa_sehari='$bhsa_sehari',alamat_siswa='$alamat_siswa',no_hp='$no_hp',tinggal_bersama='$tinggal_bersama',jarak_rumah='$jarak_rumah',golongan_darah='$golongan_darah',penyakit_siswa='$penyakit_siswa',kelainan_jasmani='$kelainan_jasmani',tinggi_badan='$tinggi_badan',berat_badan='$berat_badan',lulusan_dari='$lulusan_dari',tgl_ijazah='$tgl_ijazah',no_ijazah='$no_ijazah',tgl_no_stl='$tgl_no_stl',lama_belajar='$lama_belajar',pindah_sekolah='$pindah_sekolah',terima_ditingkat='$terima_ditingkat',alasan_pindah='$alasan_pindah',bidang_study='$bidang_study',kompetensi_keahlian='$kompetensi_keahlian',tgl_masuk_sekolah='$tgl_masuk_sekolah' WHERE id_data_siswa='$id_data_siswa' ") or die(mysqli_error($this->koneksi));
        return "sukses";
    }
    function upload_data_siswa($upload)
    {
        include 'excel_reader.php';
        // mengambil name upload
        $nama_xls = basename($upload['name']);
        // menagmbil lokasi upload
        $lokasi_xls = $upload['tmp_name'];

        // mengambil extensi file upload
        $ext_xls = pathinfo($nama_xls, PATHINFO_EXTENSION);

        // membuat daftar extensi yang di perbolehkan
        $data_ext = array('xls','XLS');

        // mengecek extensi file dengan data extensi apakah ada yang cocok
        // jika ada yang cocokmaka
        if(in_array($ext_xls, $data_ext))
        {
            // mengupload datanya
            move_uploaded_file($lokasi_xls, $nama_xls);

            // membaca isi file xls
            $isi_xls = new Spreadsheet_Excel_Reader($nama_xls,false);

            // membuat sheet pertama yang dimulai dengan index 0
            $sheet_satu = 0;

            // menghitung banyak baris yang ada pada isi xsl
            $baris = $isi_xls->rowcount($sheet_satu);

            // menginport file .xls ke database melalui bari ke 2, karna baris pertama berisi judul
            for ($i=2; $i < $baris ; $i++)
            { 
                // membaca data dari kolom pertama sd terakhir yang ada pada isi xls
                $nis = $isi_xls->val($i, 1);
                $nisn = $isi_xls->val($i, 2);
                $nama_lengkap = $isi_xls->val($i, 3);
                $nama_panggilan = $isi_xls->val($i, 4);
                $email = $isi_xls->val($i, 5);
                $jk_siswa = $isi_xls->val($i, 6);
                $tempat_lahir_siswa = $isi_xls->val($i, 7);
                $tgl_lahir_siswa = $isi_xls->val($i, 8);
                // $umur_siswa = $isi_xls->val($i, 9);
                $agama_siswa = $isi_xls->val($i, 9);
                $kewarganegaraan_siswa = $isi_xls->val($i, 10);
                $anakke_siswa = $isi_xls->val($i, 11);
                $jmlh_saudara_kndng = $isi_xls->val($i, 12);
                $jmlh_saudara_tiri = $isi_xls->val($i, 13);
                $jmlh_saudara_angkat = $isi_xls->val($i, 14);
                $anak_siswa = $isi_xls->val($i, 15);
                $bhsa_sehari = $isi_xls->val($i, 16);
                $alamat_siswa = $isi_xls->val($i, 17);
                $no_hp = $isi_xls->val($i, 18);
                $tinggal_bersama = $isi_xls->val($i, 19);
                $jarak_rumah = $isi_xls->val($i, 20);
                $golongan_darah = $isi_xls->val($i, 21);
                $penyakit_siswa = $isi_xls->val($i, 22);
                $kelainan_jasmani = $isi_xls->val($i, 23);
                $tinggi_badan = $isi_xls->val($i, 24);
                $berat_badan = $isi_xls->val($i, 25);
                $lulusan_dari = $isi_xls->val($i, 26);
                $tgl_ijazah = $isi_xls->val($i, 27);
                $no_ijazah = $isi_xls->val($i, 28);
                $tgl_no_stl = $isi_xls->val($i, 29);
                $lama_belajar = $isi_xls->val($i, 30);
                $pindah_sekolah = $isi_xls->val($i, 31);
                $alasan_pindah = $isi_xls->val($i, 32);
                $terima_ditingkat = $isi_xls->val($i, 33);
                $bidang_study = $isi_xls->val($i, 34);
                $kompetensi_keahlian = $isi_xls->val($i, 35);
                $tgl_masuk_sekolah = $isi_xls->val($i, 36);
                $password = $isi_xls->val($i, 37);
                $status_siswa = $isi_xls->val($i, 38);
                $status_registrasi_alumni = $isi_xls->val($i, 39);
                
                // setealah itu membuat query tambah data table data_siswa
                $this->koneksi->query("INSERT INTO data_siswa (nis,nisn,nama_lengkap,nama_panggilan,email,jk_siswa,tempat_lahir_siswa,tgl_lahir_siswa,/*umur_siswa,*/agama_siswa,kewarganegaraan_siswa,anakke_siswa,jmlh_saudara_kndng,jmlh_saudara_tiri,jmlh_saudara_angkat,anak_siswa,bhsa_sehari,alamat_siswa,no_hp,tinggal_bersama,jarak_rumah,golongan_darah,penyakit_siswa,kelainan_jasmani,tinggi_badan,berat_badan,lulusan_dari,tgl_ijazah,no_ijazah,tgl_no_stl,lama_belajar,pindah_sekolah,terima_ditingkat,alasan_pindah,bidang_study,kompetensi_keahlian,tgl_masuk_sekolah) VALUES ('$nis','$nisn','$nama_lengkap','$nama_panggilan','$email','$jk_siswa','$tempat_lahir_siswa','$tgl_lahir_siswa',/*'$umur_siswa',*/'$agama_siswa','$kewarganegaraan_siswa','$anakke_siswa','$jmlh_saudara_kndng','$jmlh_saudara_tiri','$jmlh_saudara_angkat','$anak_siswa','$bhsa_sehari','$alamat_siswa','$no_hp','$tinggal_bersama','$jarak_rumah','$golongan_darah','$penyakit_siswa','$kelainan_jasmani','$tinggi_badan','$berat_badan','$lulusan_dari','$tgl_ijazah','$no_ijazah','$tgl_no_stl','$lama_belajar','$pindah_sekolah','$terima_ditingkat','$alasan_pindah','$bidang_study','$kompetensi_keahlian','$tgl_masuk_sekolah')") or die (mysqli_error($this->koneksi));
            }

            // mengembalika kata berhasil jika extensinya berula xls
            return 'berhasil';

        }
        else
        {
            return 'gagal';
        }
    }

    function ambil_siswa_daftar()
    {
        $ambil = $this->koneksi->query("SELECT * FROM data_siswa ORDER BY id_data_siswa DESC");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
}

//Pemanggilan obyek
$siswa_sekolah = new siswa();


/*=================================================*/
/*========== TABEL DATA ADMIN ===========*/
/*=================================================*/
class admin extends utama
{
    function validasi_login ()
    {
        // waktu 20 detik
        $waktu = 600;
        $_SESSION['waktu'] = time()+$waktu;
    }
    function login_admin($username,$password)
    {
        $enpass = sha1($password);
        $cek = $this->koneksi->query("SELECT * FROM admin WHERE username='$username' AND password='$enpass'");
        $yangcocok = $cek->num_rows;
        if ($yangcocok==1) 
        {
            $akun = $cek->fetch_assoc();
            $_SESSION['admin'] = $akun;
            // menjalankan function validasi login
            $this->validasi_login();
            return "sukses";
        }
        else
        {
            return "gagal";
        }
    }
    function ubah_pass ($password_lama, $password_baru,  $id_admin,$password_admin)
    {
        if (sha1($password_lama)==$password_admin) 
        {
            $pass=sha1($password_baru);
            $this->koneksi->query("UPDATE admin SET password='$pass' WHERE id_admin='$id_admin'");
            return "berhasil";
        }
        else
        {
            return "gagal";
        }
    }
}

$admin = new admin();


/*=================================================*/
/*==TABEL DATA DATA SISWA FOR LOGIN AND REGISTRASI==*/
/*=================================================*/
class alumni extends utama
{
    function login_alumni($nis, $password)
    {
        $enpass = sha1($password);
        $cek = $this->koneksi->query("SELECT * FROM data_siswa WHERE nis='$nis' AND password='$enpass'");
        $yangcocokalumni = $cek->num_rows;
        if ($yangcocokalumni==1) 
        {
            $akun = $cek->fetch_assoc();
            $_SESSION['alumni']=$akun;
            return 'sukses';
        }
        else
        {
            return 'gagal';
        }
    }
    function registrasi_alumni($nama_lengkap, $nis,$orang_tua, $email)
    {
        $ambil = $this->koneksi->query("SELECT * FROM data_siswa JOIN orang_tua ON data_siswa.nis=orang_tua.nis WHERE data_siswa.nis='$nis' AND data_siswa.email='$email'");
        $hasil = $ambil->num_rows;
        if ($hasil==1) 
        {
            return 'gagal';
        }
        else
        {
            $ambil_siswa = $this->koneksi->query("SELECT * FROM data_siswa JOIN orang_tua ON data_siswa.nis=orang_tua.nis WHERE data_siswa.nis='$nis' AND orang_tua.nama_ayah_siswa='$orang_tua'");
            $hitung_data = $ambil_siswa->num_rows;
            //echo $hitung_data;
            if ($hitung_data == 1)
            {
                $hitung_email = $this->koneksi->query("SELECT * FROM data_siswa WHERE email='$email'");
                $data_email = $hitung_email->num_rows;
                if ($data_email == 1)
                {
                    return 'sangat gagal';
                }
                else
                {
                    // nis akan dicek terlebh dahulu, jika ada maka berhasil disimpan
                    // membuat karakter
                    $karakter = "qwertyuiopasdfghjklzxcvbnm1234567890";
                    $string = '';
                    for ($i=0; $i < 8 ; $i++) 
                    { 
                        $post = rand(0, strlen($karakter)-1);
                        $string .= $karakter[$post];
                    }
                    $pesan['nis']=$nis;
                    $pesan['nama_lengkap']=$nama_lengkap;
                    $pesan['email']=$email;
                    $pesan['password']=$string;

                    $subject = "pendaftaran alumni smk";
                    $message = 
                    "
                    <html>
                    <head>
                        <title>Pendaftaran Alumni SMK Negeri 1 Jogonalan Klaten</title>
                    </head>
                    <body>
                        <h2>Selamat Anda Telah Terdaftar Alumni SMK Negeri 1 Jogonalan Klaten</h2>
                        <p>selamat anda telah terdaftar</p>
                        <p>Nomor Induk Siswa : {nis}</p>
                        <p>Nama Lengkap : {nama_lengkap}</p>
                        <p>Email : {email}</p>
                        <p>password : {password}</p>
                    </body>
                    </html>
                    ";

                    foreach ($pesan as $key => $value) 
                    {
                        $message = str_replace("{".$key."}", $value, $message);
                    }



                    $headers = "MIME-Version: 1.0"."\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";

                    $headers .= 'from : <admin@alumni.smkn1jogonalan.sch.id>';

                    mail($email, $subject, $message, $headers);
                    $password = sha1($string);
                    $this->koneksi->query("UPDATE data_siswa SET email='$email', password='$password', status_registrasi_alumni='sudah' WHERE nis='$nis' ");

                    //jika nis ada di database maka berhasil disimpan
                    // menampilkan hasil pendaftaran
                    
                    return 'berhasil';
                }
            }
            else
            {
                //echo "kadal salah";
                // jika nis tidak sesuai dengan database maka gagal disimpan
                return 'gagal';
            }
        }
    }
    function reset_pass($nis,$email)
    {
        $ambil = $this->koneksi->query("SELECT * FROM data_siswa WHERE nis='$nis' AND email='$email'");
        $hasil = $ambil->num_rows;
        if ($hasil==1) 
        {
            // nis akan dicek terlebh dahulu, jika ada maka berhasil disimpan
            // membuat karakter
            $karakter = "qwertyuiopasdfghjklzxcvbnm1234567890";
            $string = '';
            for ($i=0; $i < 8 ; $i++) 
            { 
                $post = rand(0, strlen($karakter)-1);
                $string .= $karakter[$post];
            }
            $pesan['nis']=$nis;
            $pesan['email']=$email;
            $pesan['password']=$string;

            $subject = "pendaftaran alumni smk";
            $message = 
            "
            <html>
            <head>
                <title>Reset Akun SMK</title>
            </head>
            <body>
                <p>selamat anda telah terdaftar</p>
                <p>Nomor Induk Siswa : {nis}</p>
                <p>Email : {email}</p>
                <p>password : {password}</p>
            </body>
            </html>
            ";

            foreach ($pesan as $key => $value) 
            {
                $message = str_replace("{".$key."}", $value, $message);
            }

            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";

            $headers .= 'from : <admin@alumni.smkn1jogonalan.sch.id>';

            mail($email, $subject, $message, $headers);
            $password = sha1($string);
            $this->koneksi->query("UPDATE data_siswa SET password='$password' WHERE nis='$nis'");

            // jika nis ada di database maka berhasil disimpan
            return 'berhasil';
        }
        else
        {
            // jika nis tidak sesuai dengan database maka gagal disimpan
            return 'gagal';
        }
    }

    function ganti_pass($password_lama, $password_baru, $id_data_siswa, $password)
    {
        if (sha1($password_lama)==$password) 
        {
            $pass = sha1($password_baru);
            $this->koneksi->query("UPDATE data_siswa SET password='$pass' WHERE id_data_siswa='$id_data_siswa'");
            return "berhasil";
        }
        else
        {
            return "gagal";
        }
    }
    function ambil_biodata_alumni ($nis)
    {
        $ambil = $this->koneksi->query("SELECT * FROM data_siswa WHERE nis='$nis'");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    function ambil_orang_tua_alumni ($nis)
    {
        $ambil = $this->koneksi->query("SELECT * FROM orang_tua WHERE nis='$nis'");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    function ambil_wali_alumni ($nis)
    {
        $ambil = $this->koneksi->query("SELECT * FROM wali_siswa WHERE nis='$nis' ");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    function ambil_perkembangan_alumni ($nis)
    {
        $ambil = $this->koneksi->query("SELECT * FROM perkembangan_siswa WHERE nis='$nis' ");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    function ambil_data_alumni ($nis)
    {
        $ambil = $this->koneksi->query("SELECT * FROM registrasi_alumni WHERE nis='$nis' ");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    
}
$alumni = new alumni();


/*=================================================*/
/*========== TABEL ORANG TUA ===========*/
/*=================================================*/

class orang_tua extends utama
{
    function tampil_ortu()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM orang_tua JOIN data_siswa ON orang_tua.nis=data_siswa.nis");
        while($pecah = $ambil->fetch_assoc())
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_ortu($id_ortu)
    {
        $ambil = $this->koneksi->query("SELECT * FROM orang_tua WHERE id_ortu='$id_ortu'");
        $pecah = $ambil->fetch_assoc();
        return $pecah;
    }
    function hapus_ortu ($id_ortu)
    {
        $ambil = $this->ambil_ortu($id_ortu);
        $this->koneksi->query("DELETE FROM orang_tua WHERE id_ortu='$id_ortu'");
    }
    function simpan_ortu($nis,$nama_ayah_siswa,$tempat_lahir_ayah,$tgl_lahir_ayah,$agama_ayah,$kewarganegaraan_ayah,$pendidikan_ayah,$penghasilan_perbulan_ayah,$alamat_rumah_ayah,$no_tlp_ayah,$keadaan_ayah,$nama_ibu_siswa,$tempat_lahir_ibu,$tgl_lahir_ibu,$agama_ibu,$kewarganegaraan_ibu,$pendidikan_ibu,$pekerjaan_ibu,$penghasilan_perbulan_ibu,$alamat_rumah_ibu,$no_tlp_ibu,$keadaan_ibu)
    {
        $this->koneksi->query("INSERT INTO orang_tua (nis,nama_ayah_siswa,tempat_lahir_ayah,tgl_lahir_ayah,agama_ayah,kewarganegaraan_ayah,pendidikan_ayah,penghasilan_perbulan_ayah,alamat_rumah_ayah,no_tlp_ayah,keadaan_ayah,nama_ibu_siswa,tempat_lahir_ibu,tgl_lahir_ibu,agama_ibu,kewarganegaraan_ibu,pendidikan_ibu,pekerjaan_ibu,penghasilan_perbulan_ibu,alamat_rumah_ibu,no_tlp_ibu,keadaan_ibu) VALUES ('$nis','$nama_ayah_siswa','$tempat_lahir_ayah','$tgl_lahir_ayah','$agama_ayah','$kewarganegaraan_ayah','$pendidikan_ayah','$penghasilan_perbulan_ayah','$alamat_rumah_ayah','$no_tlp_ayah','$keadaan_ayah','$nama_ibu_siswa','$tempat_lahir_ibu','$tgl_lahir_ibu','$agama_ibu','$kewarganegaraan_ibu','$pendidikan_ibu','$pekerjaan_ibu','$penghasilan_perbulan_ibu','$alamat_rumah_ibu','$no_tlp_ibu','$keadaan_ibu')");
        return "berhasil";
    }
    function edit_ortu($nis,$nama_ayah_siswa,$tempat_lahir_ayah,$tgl_lahir_ayah,$agama_ayah,$kewarganegaraan_ayah,$pendidikan_ayah,$pekerjaan_ayah,$penghasilan_perbulan_ayah,$alamat_rumah_ayah,$no_tlp_ayah,$keadaan_ayah,$nama_ibu_siswa,$tempat_lahir_ibu,$tgl_lahir_ibu,$agama_ibu,$kewarganegaraan_ibu,$pendidikan_ibu,$pekerjaan_ibu,$penghasilan_perbulan_ibu,$alamat_rumah_ibu,$no_tlp_ibu,$keadaan_ibu,$id_ortu)
    {
        // $ambil = $this->koneksi->query("SELECT * FROM orang_tua WHERE nis='$nis' ");
        // $pecah = $ambil->fetch_assoc();
        // if ($pecah == 1) 
        // {
        $this->koneksi->query("UPDATE orang_tua SET nis='$nis', nama_ayah_siswa='$nama_ayah_siswa', tempat_lahir_ayah='$tempat_lahir_ayah', tgl_lahir_ayah='$tgl_lahir_ayah', agama_ayah='$agama_ayah', kewarganegaraan_ayah='$kewarganegaraan_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', penghasilan_perbulan_ayah='$penghasilan_perbulan_ayah', alamat_rumah_ayah='$alamat_rumah_ayah', no_tlp_ayah='$no_tlp_ayah', keadaan_ayah='$keadaan_ayah', nama_ibu_siswa='$nama_ibu_siswa', tempat_lahir_ibu='$tempat_lahir_ibu', tgl_lahir_ibu='$tgl_lahir_ibu', agama_ibu='$agama_ibu', kewarganegaraan_ibu='$kewarganegaraan_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_perbulan_ibu='$penghasilan_perbulan_ibu', alamat_rumah_ibu='$alamat_rumah_ibu', no_tlp_ibu='$no_tlp_ibu', keadaan_ibu='$keadaan_ibu' WHERE id_ortu='$id_ortu' ") or die (mysqli_error($this->koneksi));
        return "berhasil";
        // }
        // else
        // {
        //     echo "kadal bangke";
        //     return "gagal";
        // }
        
    }
    function upload_orang_tua ($upload)
    {
        include 'excel_reader.php';
        // mengambil name upload
        $nama_xls = basename($upload['name']);
        // menagmbil lokasi upload
        $lokasi_xls = $upload['tmp_name'];

        // mengambil extensi file upload
        $ext_xls = pathinfo($nama_xls, PATHINFO_EXTENSION);

        // membuat daftar extensi yang di perbolehkan
        $data_ext = array('xls','XLS');

        // mengecek extensi file dengan data extensi apakah ada yang cocok
        // jika ada yang cocokmaka
        if(in_array($ext_xls, $data_ext))
        {
            // mengupload datanya
            move_uploaded_file($lokasi_xls, $nama_xls);

            // membaca isi file xls
            $isi_xls = new Spreadsheet_Excel_Reader($nama_xls,false);

            // membuat sheet pertama yang dimulai dengan index 0
            $sheet_satu = 0;

            // menghitung banyak baris yang ada pada isi xsl
            $baris = $isi_xls->rowcount($sheet_satu);

            // menginport file .xls ke database melalui bari ke 2, karna baris pertama berisi judul
            for ($i=2; $i < $baris; $i++)
            { 
                // membaca data dari kolom pertama sd terakhir yang ada pada isi xls
                $nis = $isi_xls->val($i, 1);
                $nama_ayah_siswa = $isi_xls->val($i, 2);
                $tempat_lahir_ayah = $isi_xls->val($i, 3);
                $tgl_lahir_ayah = $isi_xls->val($i, 4);
                $agama_ayah = $isi_xls->val($i, 5);
                $kewarganegaraan_ayah = $isi_xls->val($i, 6);
                $pendidikan_ayah = $isi_xls->val($i, 7);
                $pekerjaan_ayah = $isi_xls->val($i, 8);
                $penghasilan_perbulan_ayah = $isi_xls->val($i, 9);
                $alamat_rumah_ayah = $isi_xls->val($i, 10);
                $no_tlp_ayah = $isi_xls->val($i, 11);
                $keadaan_ayah = $isi_xls->val($i, 12);
                $nama_ibu_siswa = $isi_xls->val($i, 13);
                $tempat_lahir_ibu = $isi_xls->val($i, 14);
                $tgl_lahir_ibu = $isi_xls->val($i, 15);
                $agama_ibu = $isi_xls->val($i, 16);
                $kewarganegaraan_ibu = $isi_xls->val($i, 17);
                $pendidikan_ibu = $isi_xls->val($i, 18);
                $pekerjaan_ibu = $isi_xls->val($i, 19);
                $penghasilan_perbulan_ibu = $isi_xls->val($i, 20);
                $alamat_rumah_ibu = $isi_xls->val($i, 21);
                $no_tlp_ibu = $isi_xls->val($i, 22);
                $keadaan_ibu = $isi_xls->val($i, 23);

                // setealah itu membuat query tambah data table data_siswa
                $this->koneksi->query("INSERT INTO orang_tua (nis,nama_ayah_siswa,tempat_lahir_ayah,tgl_lahir_ayah,agama_ayah,kewarganegaraan_ayah,pendidikan_ayah,pekerjaan_ayah,penghasilan_perbulan_ayah,alamat_rumah_ayah,no_tlp_ayah,keadaan_ayah,nama_ibu_siswa,tempat_lahir_ibu,tgl_lahir_ibu,agama_ibu,kewarganegaraan_ibu,pendidikan_ibu,pekerjaan_ibu,penghasilan_perbulan_ibu,alamat_rumah_ibu,no_tlp_ibu,keadaan_ibu) VALUES ('$nis','$nama_ayah_siswa','$tempat_lahir_ayah','$tgl_lahir_ayah','$agama_ayah','$kewarganegaraan_ayah','$pendidikan_ayah','$pekerjaan_ayah','$penghasilan_perbulan_ayah','$alamat_rumah_ayah','$no_tlp_ayah','$keadaan_ayah','$nama_ibu_siswa','$tempat_lahir_ibu','$tgl_lahir_ibu','$agama_ibu','$kewarganegaraan_ibu','$pendidikan_ibu','$pekerjaan_ibu','$penghasilan_perbulan_ibu','$alamat_rumah_ibu','$no_tlp_ibu','$keadaan_ibu')");
            }
            return 'berhasil';
        }
        else
        {
            return 'gagal';
        }
    }
}
$ortu = new orang_tua();

/*=================================================*/
/*========== TABEL WALI SISWA ===========*/
/*=================================================*/

class wali_siswa extends utama
{
    function tampil_wali_siswa()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM wali_siswa");
        while($pecah = $ambil->fetch_assoc())
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_wali_siswa($id_wali_siswa)
    {
        $ambil=$this->koneksi->query("SELECT * FROM wali_siswa WHERE id_wali_siswa='$id_wali_siswa'");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function simpan_wali_siswa($nis,$nama_wali_siswa, $tempat_lahir_wali_siswa, $tgl_lahir_wali_siswa, $agama_wali_siswa, $kewarganegaraan_wali_siswa, $pendidikan_wali_siswa, $pekerjaan_wali_siswa, $penghasilan_perbulan_wali_siswa, $alamat_wali_siswa, $no_tlp_wali_siswa)
    {
        $ambil = $this->koneksi->query("SELECT * FROM wali_siswa WHERE nis='$nis'");
        $pecah = $ambil->fetch_assoc();
        if ($pecah == 0) 
        {
            $this->koneksi->query("INSERT INTO wali_siswa (nis, nama_wali_siswa, tempat_lahir_wali_siswa, tgl_lahir_wali_siswa, agama_wali_siswa, kewarganegaraan_wali_siswa, pendidikan_wali_siswa, pekerjaan_wali_siswa, penghasilan_perbulan_wali_siswa, alamat_wali_siswa, no_tlp_wali_siswa) VALUES('$nis','$nama_wali_siswa','$tempat_lahir_wali_siswa','$tgl_lahir_wali_siswa','$agama_wali_siswa','$kewarganegaraan_wali_siswa','$pendidikan_wali_siswa','$pekerjaan_wali_siswa','$penghasilan_perbulan_wali_siswa','$alamat_wali_siswa','$no_tlp_wali_siswa')")or die (mysqli_error($this->koneksi));
            return "berhasil";
        }
        else
        {
            return "gagal";
        }
    }
    function ubah_wali_siswa ($nis,$nama_wali_siswa, $tempat_lahir_wali_siswa, $tgl_lahir_wali_siswa, $agama_wali_siswa, $kewarganegaraan_wali_siswa, $pendidikan_wali_siswa, $pekerjaan_wali_siswa, $penghasilan_perbulan_wali_siswa, $alamat_wali_siswa, $no_tlp_wali_siswa, $id_wali_siswa)
    {
        // $ambil = $this->koneksi->query("SELECT * FROM wali_siswa WHERE nis='$nis' ");
        // $pecah = $ambil->fetch_assoc();
        // if ($pecah == 1)
        // {
        $this->koneksi->query("UPDATE wali_siswa SET nama_wali_siswa='$nama_wali_siswa', tempat_lahir_wali_siswa='$tempat_lahir_wali_siswa', tgl_lahir_wali_siswa='$tgl_lahir_wali_siswa', agama_wali_siswa='$agama_wali_siswa', kewarganegaraan_wali_siswa='$kewarganegaraan_wali_siswa', pendidikan_wali_siswa='$pendidikan_wali_siswa', pekerjaan_wali_siswa='$pekerjaan_wali_siswa', penghasilan_perbulan_wali_siswa='$penghasilan_perbulan_wali_siswa', alamat_wali_siswa='$alamat_wali_siswa', no_tlp_wali_siswa='$no_tlp_wali_siswa' WHERE id_wali_siswa='$id_wali_siswa' ");
        return "berhasil";
        // }
        // else
        // {
        //     return "gagal";
        // }
    }
    function edit_wali_siswa ($nis,$nama_wali_siswa,$tempat_lahir_wali_siswa,$tgl_lahir_wali_siswa,$agama_wali_siswa,$kewarganegaraan_wali_siswa,$pendidikan_wali_siswa,$pekerjaan_wali_siswa,$penghasilan_perbulan_wali_siswa,$alamat_wali_siswa,$no_tlp_wali_siswa,$id_wali_siswa)
    {
        // $this->koneksi->query("UPDATE data_siswa SET  ") or die(mysqli_error($this->koneksi));

        $this->koneksi->query("UPDATE wali_siswa SET nis='$nis', nama_wali_siswa='$nama_wali_siswa', tempat_lahir_wali_siswa='$tempat_lahir_wali_siswa', tgl_lahir_wali_siswa='$tgl_lahir_wali_siswa', agama_wali_siswa='$agama_wali_siswa', kewarganegaraan_wali_siswa='$kewarganegaraan_wali_siswa', pendidikan_wali_siswa='$pendidikan_wali_siswa', pekerjaan_wali_siswa='$pekerjaan_wali_siswa', penghasilan_perbulan_wali_siswa='$penghasilan_perbulan_wali_siswa', alamat_wali_siswa='$alamat_wali_siswa', no_tlp_wali_siswa='$no_tlp_wali_siswa' WHERE id_wali_siswa='$id_wali_siswa' ")or die (mysqli_error($this->koneksi));
        return "sukses";
    }
    function hapus_wali_siswa($id_wali_siswa)
    {
        $ambil = $this->ambil_wali_siswa($id_wali_siswa);
        $this->koneksi->query("DELETE FROM wali_siswa WHERE id_wali_siswa='$id_wali_siswa'");
    }
}
// Objek Wali Siswa
$wali = new wali_siswa();

/*=================================================*/
/*========== TABEL PERKEMBANGAN SISWA ===========*/
/*=================================================*/

class perkembangan_siswa extends utama
{
    function tampil_perkembangan_siswa()
    {
        $banyak_data = array();
        $ambil = $this->koneksi->query("SELECT * FROM perkembangan_siswa JOIN data_siswa ON perkembangan_siswa.nis=data_siswa.nis");
        while($pecah = $ambil->fetch_assoc())
        {
            $banyak_data[] = $pecah;
        }
        return $banyak_data;
    }
    function ambil_perkembangan_siswa($id_perkembangan_siswa)
    {
        $ambil=$this->koneksi->query("SELECT * FROM perkembangan_siswa WHERE id_perkembangan_siswa='$id_perkembangan_siswa'");
        $pecah=$ambil->fetch_assoc();
        return $pecah;
    }
    function hapus_perkembangan_siswa($id_perkembangan_siswa)
    {
        $ambil = $this->ambil_perkembangan_siswa($id_perkembangan_siswa);
        $this->koneksi->query("DELETE FROM perkembangan_siswa WHERE id_perkembangan_siswa='$id_perkembangan_siswa'");

    }
    function simpan_perkembangan_siswa($nis,$kesenian,$olahraga,$organisasi,$hobi_lain,$tahun_beasiswa,$tingkat_beasiswa,$dari_beasiswa,$tgl_meninggalkan_sklh,$alasan_meninggalkan_sklh)
    {
        $ambil = $this->koneksi->query("SELECT * FROM perkembangan_siswa WHERE nis='$nis'");
        $pecah = $ambil->fetch_assoc();
        if ($pecah == 0) 
        {
            $this->koneksi->query("INSERT INTO perkembangan_siswa (nis, kesenian, olahraga, organisasi, hobi_lain, tahun_beasiswa, tingkat_beasiswa, dari_beasiswa, tgl_meninggalkan_sklh, alasan_meninggalkan_sklh) VALUES ('$nis', '$kesenian', '$olahraga', '$organisasi', '$hobi_lain', '$tahun_beasiswa', '$tingkat_beasiswa', '$dari_beasiswa', '$tgl_meninggalkan_sklh', '$alasan_meninggalkan_sklh')") or die (mysqli_error($this->koneksi));
                return "berhasil";
        }
        else
        {
            return "gagal";
        }
    }
    function edit_perkembangan_siswa($nis,$kesenian,$olahraga,$organisasi,$hobi_lain,$tahun_beasiswa,$tingkat_beasiswa,$dari_beasiswa,$tgl_meninggalkan_sklh,$alasan_meninggalkan_sklh,$id_perkembangan_siswa)
    {
        $this->koneksi->query("UPDATE perkembangan_siswa SET nis='$nis', kesenian='$kesenian', olahraga='$olahraga', organisasi='$organisasi', hobi_lain='$hobi_lain', tahun_beasiswa='$tahun_beasiswa', tingkat_beasiswa='$tingkat_beasiswa', dari_beasiswa='$dari_beasiswa', tgl_meninggalkan_sklh='$tgl_meninggalkan_sklh', alasan_meninggalkan_sklh='$alasan_meninggalkan_sklh' WHERE id_perkembangan_siswa='$id_perkembangan_siswa' ") or die (mysqli_error($this->koneksi));
        return "berhasil";
    }
}
// Objek Perkembangan Siswa
$perkembangan_siswa_sklh = new perkembangan_siswa();


?>