<?php
$da = $_SESSION['alumni']
?>

<div class="row">
  <div class="col-md-12">
    <ul class="timeline">
      <?php 
      if (!isset($_GET) or empty($_GET['hal'])) 
      {
        $_GET['hal']=1;
        $batas1 = 3;
        $posisi1 = 0;
      }
      else
      {
        $batas1 = 3;
        $posisi1 = ($_GET['hal']-1)*$batas1;
      }
      ?>

      <?php 
      $tampil_post_loker = $pengumuman_loker->tampil_loker($posisi1, $batas1); 
      ?>
      <!-- timeline time label -->
      <?php foreach ($tampil_post_loker as $key => $value): ?>
        <li class="time-label">
          <span class="bg-aqua">
            <?php echo $value['waktu_posting_loker']; ?>
          </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
          <!-- timeline icon -->
          <i class="fa fa-envelope bg-blue"></i>
          <div class="timeline-item">

            <h3 class="timeline-header"><a href="#"><?php echo $value['nama_pt_loker']; ?></a></h3>

            <div class="timeline-body">
              <?php echo substr(strip_tags($value['isi_konten_loker']), 0, 200); ?>
            </div>

            <div class="timeline-footer">
              <?php $sekarang = strtotime(date("Y-m-d H:i:s")); ?>
              <?php $jatuh_tempo = strtotime($value['jatuh_tempo_loker']); ?>
              <?php if ($sekarang>=$jatuh_tempo): ?>
                <a class="btn btn-primary btn-xs" disabled>Selengkapnya</a>
              <?php else: ?>
                <a href="index.php?halaman=lihatloker&id=<?php echo $value['id_loker']; ?>" class="btn btn-primary btn-xs">Selengkapnya</a>
              <?php endif ?>
            </div>
          </div>
        </li>
      <?php endforeach ?>
      <!-- END timeline item -->
    </ul>

    <nav>
      <?php 
      // menghitung seluruh data
      $tampil_post_loker = $pengumuman_loker->tampil_loker(0, 9999999999); 
      $jumlahdata1 = count($tampil_post_loker);

      // mendapatkan jumlah page rumusnya (jumlahpage/batas) lalu dibluatkan
      $jumlahpage1 = ceil($jumlahdata1/3);
      ?>
      <ul class="pagination">
        <?php for ($i= 1; $i <= $jumlahpage1; $i++): ?>
          <li class="<?php if ($_GET['hal']==$i) {echo "active";} ?>"><a href="index.php?hal=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          
        <?php endfor ?>
        
      </ul>
    </nav>
  </div>
</div>