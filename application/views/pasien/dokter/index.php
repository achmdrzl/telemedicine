<!-- ======================
    Features Layout 2
    ========================= -->
<section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
  <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <h3 class="heading__title color-white mx-auto mb-3">Dokter Telemedicine RSUD Kabupaten Jombang</h3>
      <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
      </div><!-- /col-lg-5 -->
    </div><!-- /.row -->
    <div class="row">
      <!-- Feature item #1 -->
      <?php foreach ($dokter as $row) : ?>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <img src="<?= base_url(); ?>/assets/admin/images/<?= $row['PROFIL_DOKTER']; ?>" alt="Foto Dokter <?= $row['NAMA_DOKTER']; ?>" class="dokter">
            <div class="feature__content text-center">
              <h4 class="feature__title"><?= $row['NAMA_DOKTER']; ?></h4>
              <h6 class="feature__title">Dokter <?= $row['SPESIALISASI']; ?></h6>
            </div><!-- /.feature__content -->
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
      <?php endforeach; ?>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->