<?php 
//$data_list_event = $pengumuman_event->tampil_event();

$id_event = $_GET['id'];
$ambil_post_event = $pengumuman_event->ambil_event($id_event);
?>


<div class="row">
    <div class="col-md-4">
        <div class="box box-solid">
            <div class="callout callout-danger">
                <h4>Daftar List Event</h4>
            </div>
            <div class="box-body">
                <?php 
                if (!isset($_GET) or empty($_GET['page'])) 
                {
                    $_GET['page']=1;
                    $batas = 5;
                    $posisi = 0;
                }
                else
                {
                    $batas = 5;
                    $posisi = ($_GET['page']-1)*$batas;
                }
                ?>

                <?php 
                $data_list_event = $pengumuman_event->tampil_event($posisi, $batas); 
                ?>
                <ul>
                    <?php foreach ($data_list_event as $key => $value): ?>
                        <li><a href="index.php?halaman=lihatevent&id=<?php echo $value['id_event']; ?>"><?php echo $value['judul_event']; ?></a></li>
                    <?php endforeach ?>
                </ul>

                <nav>
                  <?php 
                    // menghitung seluruh data
                  $tampil_event = $pengumuman_event->tampil_event(0, 9999999999); 
                  $jumlahdata = count($tampil_event);

                    // mendapatkan jumlah page rumusnya (jumlahpage/batas) lalu dibluatkan
                  $jumlahpage = ceil($jumlahdata/$batas);
                  ?>
                  <ul class="pagination">
                    <?php if ($_GET['page']>1): ?>
                        <li><a href="index.php?halaman=lihatevent&id=<?php echo $_GET['id'] ?>&page=<?php echo $_GET['page']-1; ?>">Prev</a></li>
                    <?php endif ?>
                    <?php for ($i= 1; $i <= $jumlahpage; $i++): ?>
                        <li class="<?php if ($_GET['page']==$i) {echo "active";} ?>"><a href="index.php?halaman=lihatevent&id=<?php echo $_GET['id'] ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor ?>
                    <?php if ($_GET['page']<$jumlahpage): ?>
                        <li><a href="index.php?halaman=lihatevent&id=<?php echo $_GET['id'] ?>&page=<?php echo $_GET['page']+1; ?>">Next</a></li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="col-md-8">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3><?php echo $ambil_post_event['judul_event']; ?></h3>
        </div>
        <div class="box-header with-border">
            <h5><i class="fa fa-clock-o"></i>&nbsp; <?php echo $ambil_post_event['waktu_posting_event']; ?></h5>
        </div>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Blog Post</li>
        </ol>
        <div class="box-body">
            <center><img src="../assets/image/event/<?php echo $ambil_post_event['gambar_event']; ?>" width="150" class="img-resposive"></center>
            <dt>
                <dd style="text-align: justify;"><?php echo $ambil_post_event['isi_konten_event']; ?></dd>
            </dt>
        </div>
    </div>
</div>
</div>