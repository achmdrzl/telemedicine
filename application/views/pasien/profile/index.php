<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout2 bg-overlay text-center">
    <div class="bg-img"><img src="<?php echo base_url() ?>assets/images/page-titles/5.jpg" alt="background"></div>
    <!-- ==========================
        contact layout 2
    =========================== -->
    <section class="contact-layout2 pt-0">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="card">
                    <div class="contact-panel d-flex flex-wrap">
                        <?php foreach ($pasien as $db) : ?>
                            <form class="form-group" method="post" action="<?php echo base_url(); ?>auth/login">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-sm-12">
                                        <h4 class="contact-panel__title">Profile Pasien</h4>
                                        <p class="contact-panel__desc mb-30">Silahkan Melengekapi Data Berikut dengan Data yang Benar, Sebelum Melakukan Konsultasi
                                        </p>
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product__img">
                                                <?php if ($db['FILE_FOTO'] !== NULL) : ?>
                                                    <img src="<?php echo $db['FILE_FOTO']; ?>" alt="foto_pasien" loading="lazy">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="product__action">
                                            <a href="<?= base_url() ?>pasien_login/editProfil" class="btn btn__primary btn__rounded mb-3">
                                                <i class="icon-cart"></i> <span>Edit Profile</span>
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope form-group-icon"></i>
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $db['NAMA_PASIEN'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="fa fa-lock form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Email" id="email" name="password" value="<?php echo $db['EMAIL_PASIEN'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="fa fa-lock form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="NIK" id="nik" name="nik" value="<?php echo $db['NIK_PASIEN'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="fa fa-lock form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Kelahiran" id="kelahiran" name="kelahiran" value="<?php echo $db['KELAHIRAN'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="fa fa-lock form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Pekerjaan" id="pekerjaan" name="pekerjaan" value="<?php echo $db['NAMA_PEKERJAAN'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="fa fa-lock form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Golongan Darah" id="gol" name="gol" value="<?php echo $db['NAMA_GOL'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="fa fa-lock form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="<?php echo $db['ALAMAT_PASIEN'] ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>