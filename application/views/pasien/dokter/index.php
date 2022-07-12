<!-- ======================
    Features Layout 2
    ========================= -->


<section class="team-layout2 pb-80" style="background-color:#f8f8f8;">
  <div class="container">
    <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-40">
          <h3 class="heading__title">Meet Our Doctors</h3>
          <p class="heading__desc">Our administration and support staff all have exceptional people skills and
            trained to assist you with all medical enquiries.
          </p>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row">
      <?php foreach ($dokter as $row) : ?>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="member">
            <div class="member__img">
              <img src="<?= base_url(); ?>/assets/admin/images/<?= $row['PROFIL_DOKTER']; ?>" alt="Foto Dokter <?= $row['NAMA_DOKTER']; ?>" class="dokter" style="height: 200px;">
            </div><!-- /.member-img -->
            <div class="member__info">
              <h5 class="member__name"><a href="doctors-single-doctor1.html"><?= $row['NAMA_DOKTER']; ?></a></h5>
              <p class="member__job">Dokter <?= $row['SPESIALISASI']; ?></p>
              <!-- <p class="member__desc">Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane
                University prior to attending St George's University School of Medicine</p> -->
              <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded mb-3">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                </ul><!-- /.social-icons -->
              </div>
            </div><!-- /.member-info -->
          </div><!-- /.member -->
        </div><!-- /.col-12 -->
      <?php endforeach; ?>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Team -->