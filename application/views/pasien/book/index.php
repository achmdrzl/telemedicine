<section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
    <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="contact-panel mb-50">
                    <form class="form-group" method="post" action="<?= site_url('book/getJadwal') ?>">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">Daftar Konsultasi Online</h4>
                                <p class="contact-panel__desc mb-30">Silahkan memilih tanggal dan sesi yang diinginkan.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="tgl_konsul" class="form-label">Pilih Tanggal</label>
                                    <div class="form-group form-group-date">
                                        <i class="icon-calendar form-group-icon"></i>
                                        <input type="date" class="form-control" id="tgl_konsul" name="tgl_konsul" value="" required>
                                    </div>
                                    <div id="error" class="form-text text-danger"><?= form_error('konsul'); ?></div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="">
                                    <label for="sesi" class="form-label">Pilih Sesi</label>
                                    <select name="sesi" id="sesi" class="form-control">
                                        <option value="" selected>Pilih sesi</option>
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