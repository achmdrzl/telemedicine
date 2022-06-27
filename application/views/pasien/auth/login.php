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
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="contact-panel d-flex flex-wrap">
                        <form class="form-group" method="post" action="<?php echo base_url() ?>assets2/php/contact.php" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Login</h4>
                                    <p class="contact-panel__desc mb-30">Masuk ke Akun Anda
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-lock form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Password" id="contact-Phone" name="contact-phone" required>
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
                                    <a href="#" class="text-start" style="font-size:15px;">Forgot password?</a>
                                    <p class="text">Don't have an account? <a href="<?php echo site_url('welcome/register') ?>" class="forgot-password-link">Register here</a></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="flex" style="font-size: 1.75m;">or Login With</p>
                                    <a href=""><img src="<?php echo base_url() ?>assets2/images/logo/google.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

</section><!-- /.page-title -->