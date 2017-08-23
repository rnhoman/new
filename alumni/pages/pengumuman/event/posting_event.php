<?php
$da = $_SESSION['alumni']
?>
<!-- EVENT -->
<div class="row">
  <div class="col-md-12">
    <ul class="timeline">

      <?php 
      if (!isset($_GET) or empty($_GET['page'])) 
      {
        $_GET['page']=1;
        $batas = 3;
        $posisi = 0;
      }
      else
      {
        $batas = 3;
        $posisi = ($_GET['page']-1)*$batas;
      }
      ?>

      <?php 
      $tampil_event = $pengumuman_event->tampil_event($posisi, $batas); 
      ?>
      <!-- timeline time label -->
      <?php foreach ($tampil_event as $key => $value): ?>
        <li class="time-label">
          <span class="bg-red">
            <?php echo $value['waktu_posting_event']; ?>
          </span>
        </li>
        <!-- /.timeline-label -->

        <!-- timeline item -->
        <li>
          <!-- timeline icon -->
          <i class="fa fa-envelope bg-yellow"></i>
          <div class="timeline-item">

            <h3 class="timeline-header"><a href="index.php?halaman=lihatevent&id=<?php echo $value['id_event']; ?>"><?php echo $value['judul_event']; ?></a></h3>

            <div class="timeline-body">
              <?php echo substr(strip_tags($value['isi_konten_event']), 0, 200); ?>
            </div>

            <div class="timeline-footer">
              <a href="index.php?halaman=lihatevent&id=<?php echo $value['id_event']; ?>" class="btn btn-primary btn-xs">Selengkapnya</a>
            </div>
          </div>
        </li>
      <?php endforeach ?>
      <!-- END timeline item -->
    </ul>
    <nav>
      <?php 
      // menghitung seluruh data
      $tampil_event = $pengumuman_event->tampil_event(0, 9999999999); 
      $jumlahdata = count($tampil_event);

      // mendapatkan jumlah page rumusnya (jumlahpage/batas) lalu dibluatkan
      $jumlahpage = ceil($jumlahdata/3);
      ?>
      <ul class="pagination">
        <?php for ($i= 1; $i <= $jumlahpage; $i++): ?>
          <li class="<?php if ($_GET['page']==$i) {echo "active";} ?>"><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          
        <?php endfor ?>
        
      </ul>
    </nav>
  </div>
</div>