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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="contact-panel d-flex flex-wrap">
                        <?php foreach ($pasien as $db) { ?>
                            <form class="form-group" method="post" action="<?php echo base_url(); ?>auth/login">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="contact-panel__title">Profile Pasien</h4>
                                        <p class="contact-panel__desc mb-30">Silahkan Melengekapi Data Berikut dengan Data yang Benar, Sebelum Melakukan Konsultasi
                                        </p>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <i class="fa fa-envelope form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Email" id="contact-email" name="username" value="<?php echo $db['NAMA_PASIEN'] ?>" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Password" id="contact-password" name="password" value="<?php echo $db['EMAIL_PASIEN'] ?>" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Password" id="contact-password" name="password" value="<?php echo $db['NIK_PASIEN'] ?>" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Password" id="contact-password" name="password" value="<?php echo $db['KELAHIRAN'] ?>" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Password" id="contact-password" name="password" value="<?php echo $db['NAMA_PEKERJAAN'] ?>" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Password" id="contact-password" name="password" value="<?php echo $db['NAMA_GOL'] ?>" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <i class="fa fa-lock form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Password" id="contact-password" name="password" value="<?php echo $db['ALAMAT_PASIEN'] ?>" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                            <span>Update Profile</span> <i class="icon-arrow-right"></i>
                                        </button>
                                        <div class="contact-result"></div>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form>
                        <?php } ?>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

</section><!-- /.page-title -->