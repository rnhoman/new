<?php 
//$data_list_loker = $pengumuman_loker->tampil_loker();

$id_loker = $_GET['id'];
$ambil_post_loker = $pengumuman_loker->ambil_loker($id_loker);
?>


<div class="row">
    <div class="col-md-4">
        <div class="box box-solid">
            <div class="callout callout-info">
                <h4>Daftar List Lowongan Pekerjaan</h4>
            </div>
            <div class="box-body">
                <?php 
                if (!isset($_GET) or empty($_GET['hal'])) 
                {
                    $_GET['hal']=1;
                    $batas1 = 5;
                    $posisi1 = 0;
                }
                else
                {
                    $batas1 = 5;
                    $posisi1 = ($_GET['hal']-1)*$batas1;
                }
                ?>

                <?php 
                $data_list_loker = $pengumuman_loker->tampil_loker($posisi1, $batas1); 
                ?>
                <ul>
                    <?php foreach ($data_list_loker as $key => $value): ?>
                        <?php $sekarang = strtotime(date("Y-m-d H:i:s")); ?>
                        <?php $jatuh_tempo = strtotime($value['jatuh_tempo_loker']); ?>
                        <?php if ($sekarang>=$jatuh_tempo): ?>
                            <li><a class="btn btn-primary btn-xs" disabled>Selengkapnya</a>&nbsp;<label class="label label-danger"><i>Close</i></label></li>
                        <?php else: ?>
                            <li><a href="index.php?halaman=lihatloker&id=<?php echo $value['id_loker']; ?>" class="btn btn-primary btn-xs">Selengkapnya</a>&nbsp;<label class="label label-success"><i>Open</i></label></li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>

                <nav>
                  <?php 
                    // menghitung seluruh data
                  $tampil_post_loker = $pengumuman_loker->tampil_loker(0, 9999999999); 
                  $jumlahdata1 = count($tampil_post_loker);

                    // mendapatkan jumlah page rumusnya (jumlahpage/batas) lalu dibluatkan
                  $jumlahpage1 = ceil($jumlahdata1/$batas1);
                  ?>
                  <ul class="pagination">
                    <?php if ($_GET['hal']>1): ?>
                        <li><a href="index.php?halaman=lihatevent&id=<?php echo $_GET['id'] ?>&hal=<?php echo $_GET['hal']-1; ?>">Prev</a></li>
                    <?php endif ?>
                    <?php for ($i= 1; $i <= $jumlahpage1; $i++): ?>
                        <li class="<?php if ($_GET['hal']==$i) {echo "active";} ?>"><a href="index.php?halaman=lihatloker&id=<?php echo $_GET['id'] ?>&hal=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor ?>
                    <?php if ($_GET['hal']<$jumlahpage1): ?>
                        <li><a href="index.php?halaman=lihatevent&id=<?php echo $_GET['id'] ?>&hal=<?php echo $_GET['hal']+1; ?>">Next</a></li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="col-md-8">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h2><?php echo $ambil_post_loker['nama_pt_loker']; ?></h2>
        </div>
        <div class="box-header with-border">
            <h4><label class="label label-info"><?php echo $ambil_post_loker['judul_loker']; ?></label></h4>
        </div>
        <div class="box-header with-border">
            <h5><i class="fa fa-clock-o"></i>&nbsp; <?php echo $ambil_post_loker['waktu_posting_loker']; ?></h5>
        </div>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Blog Post</li>
        </ol>
        <div class="box-body">
            <dl>
                <dt style="font-size: 18px;">Batas Pengiriman : <?php echo $ambil_post_loker['jatuh_tempo_loker']; ?></dt>
            </dl>
            <center><img src="../assets/image/loker/<?php echo $ambil_post_loker['gambar_loker']; ?>" width="150" class="img-resposive"></center>
            <dt>
                <dd style="text-align: justify;"><?php echo $ambil_post_loker['isi_konten_loker']; ?></dd>
            </dt>
        </div>
    </div>
</div>
</div>