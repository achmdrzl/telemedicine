<!-- ======================
    Features Layout 2
    ========================= -->


<section class="team-layout2 pb-80" style="background-color:#f8f8f8;">
    <div class="container">
        <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                    <h3 class="heading__title">Silahkan Memilih Jadwal Dokter yang Tersedia</h3>
                    <p class="heading__desc">
                    </p>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <?php
            foreach ($data as $row) :
                $id = $row['ID_DETAIL_JADWAL'];
            ?>
                <div class="col-sm-5 col-md-5 col-lg-3">
                    <div class="member">
                        <div class="member__img align-items-center">
                            <img src="<?= base_url(); ?>/assets/admin/images/<?= $row['PROFIL_DOKTER']; ?>" alt="Foto Dokter <?= $row['NAMA_DOKTER']; ?>" class="dokter">
                        </div><!-- /.member-img -->
                        <div class="member__info">
                            <h5 class="member__name"><a href="doctors-single-doctor1.html"><?= $this->session->TGL_KONSUL; ?></a></h5>
                            <h5 class="member__name"><a href="doctors-single-doctor1.html"><?= $row['NAMA_DOKTER']; ?></a></h5>
                            <p class="member__job">Dokter <?= $row['SPESIALISASI']; ?></p>
                            <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                <a href="<?= site_url('pasien_login/inputKel/' . $id) ?>" class="btn btn__secondary btn__link btn__rounded mb-3">
                                    <span>Pilih</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.member-info -->
                    </div><!-- /.member -->
                </div><!-- /.col-12 -->
            <?php endforeach; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Team -->