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
                <div class="col-8">
                    <div class="contact-panel d-flex flex-wrap">
                        <?php
                        if (empty($this->session->flashdata('error'))) {
                            echo $this->session->flashdata('success');
                        } else {
                            echo $this->session->flashdata('error');
                        }
                        ?>
                        <form method="post" action="<?php echo site_url('auth/verifyPass') ?>">
                            <?php
                            $pesan = 'Hati-hati penipuan, berikut nomor OTP Anda untuk verifikasi pada platform Telemedicine RSUD Kabupaten Jombang : <strong>' . $OTP . '</strong>';
                            ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Reset Kata Sandi</h4>
                                    <p class="contact-panel__desc mb-30">Silahkan Masukkan Kata Sandi Baru Anda
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Password" id="otp" name="password" required>
                                        <div id="error" class="form-text text-danger"><?php echo form_error('password'); ?></div>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Confirm Password" id="otp" name="cpassword" required>
                                        <div id="error" class="form-text text-danger"><?php echo form_error('cpassword'); ?></div>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Verifikasi</span> <i class="icon-arrow-right"></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

</section><!-- /.page-title -->