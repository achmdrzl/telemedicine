<!-- ============================
        Slider
    ============================== -->
<section class="slider">

    <div class="slide-item align-v-h">
        <div class="bg-img"><img src="<?= base_url() ?>assets/pasien/images/sliders/1.jpg" alt="slide img"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="slide__content">
                        <h2 class="slide__title">Pelayanan Medis Terbaik</h2>
                        <p class="slide__desc">Kepuasan Pasien adalah Kebahagiaan Kami.</p>
                        <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                            <!-- feature item #1 -->
                            <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <h2 class="feature__title">Pemeriksaan</h2>
                            </li><!-- /.feature-item-->
                            <!-- feature item #2 -->
                            <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-medicine"></i>
                                </div>
                                <h2 class="feature__title">Resep </h2>
                            </li><!-- /.feature-item-->
                            <!-- feature item #3 -->
                            <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-heart2"></i>
                                </div>
                                <h2 class="feature__title">Detak Jantung</h2>
                            </li><!-- /.feature-item-->
                            <!-- feature item #4 -->
                            <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-blood-test"></i>
                                </div>
                                <h2 class="feature__title">Tekanan Darah</h2>
                            </li><!-- /.feature-item-->
                        </ul><!-- /.features-list -->
                    </div><!-- /.slide-content -->
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.slide-item -->
</section><!-- /.slider -->

<section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
    <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="contact-panel mb-50">
                    <form class="form-group" method="post" action="<?= site_url('pasien_login/getJadwal') ?>">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">Daftar Konsultasi Online</h4>
                                <p class="contact-panel__desc mb-30">Silahkan memilih tanggal dan sesi yang diinginkan.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="tgl_konsul" class="form-label">Pilih Tanggal</label>
                                    <input type="date" class="form-control" id="tgl_konsul" name="tgl_konsul" value="">
                                    <div id="error" class="form-text text-danger"><?= form_error('konsul'); ?></div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="sesi" class="form-label">Pilih Sesi</label>
                                    <select name="sesi" id="sesi" class="form-select">
                                        <option value="" selected>Pilih Jadwal</option>
                                        <?php foreach ($sesi as $row) : ?>
                                            <option value="<?= $row['ID_SESI'] ?>">Sesi <?= $row['ID_SESI'] ?> <?= $row['JAM']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                    <span>Selanjutnya</span> <i class="icon-arrow-right"></i>
                                </button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="heading heading-light mb-30">
                    <h3 class="heading__title mb-30">Membantu Pasien dalam Melakukan Konsultasi</h3>
                    <p class="heading__desc">Kami menyediakan layanan konsultasi secara online guna memudahkan pasien untuk melakukan konsultasi bersama dokter tanpa harus mendatangi rumah sakit terlebih dahulu.
                        Pilih tanggal dan jam sesi sesuai dengan kebutuhan Anda.
                    </p>
                </div>
                <div class="text__block">
                    <p class="text__block-desc color-white font-weight-bold"></p>
                    <div class="sinature color-white">
                        <span class="font-weight-bold"></span><span></span>
                    </div>
                </div><!-- /.text__block -->
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 3 -->