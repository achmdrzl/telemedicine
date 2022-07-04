<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout2 bg-overlay text-center">
    <div class="bg-img"><img src="<?php echo base_url() ?>assets/pasien/images/page-titles/5.jpg" alt="background"></div>
    <!-- ==========================
        contact layout 2
    =========================== -->
    <section class="contact-layout2 pt-0">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-8">
                    <div class="contact-panel d-flex flex-wrap">
                        <?php
                        if ($this->session->flashdata('error') != '') {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '</div>';
                        }
                        ?>
                        <form class="form-group" method="post" action="<?php echo base_url(); ?>auth/register">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Register</h4>
                                    <p class="contact-panel__desc mb-30">Silahkan Mengisikan Form Berikut dengan Data yang Benar
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Nama" id="contact-name" name="name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-envelope form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email" id="contact-email" name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-lock form-group-icon"></i>
                                        <input type="password" class="form-control" placeholder="Password" id="contact-password" name="password" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-phone form-group-icon"></i>
                                        <input type="number" class="form-control" placeholder="No. Handphone" id="contact-password" name="nohp" required>
                                        <!-- <div class="d-flex flex align-content-end">
                                            <a href="#!" class="text-reset text-end">Forgot password?</a>
                                        </div> -->
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Log In</span> <i class="icon-arrow-right"></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 align-content-end">
                                    <p class="text">Already have an account?</p>
                                    <a href="<?php echo site_url('welcome/login') ?>" class="forgot-password-link">Login here</a>
                                </div>
                                <div class="col-md-6">
                                    <p class="flex" style="font-size: 1.75m;">or Register With</p>
                                    <a href=""><img src="<?php echo base_url() ?>assets/pasien/images/logo/google.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

</section><!-- /.page-title -->