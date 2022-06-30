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
                        <form class="form-group" method="post" action="<?php echo base_url() ?>index.php/auth/proses" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Register</h4>
                                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly reception staff
                                        with any general or medical enquiry. Our doctors will receive or return any urgent calls.
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Email" id="username" name="username" required>
                                    </div>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-lock form-group-icon"></i>
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                    </div>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-lock form-group-icon" aria-hidden="true"></i>
                                        <!-- <i class="icon-lock form-group-icon"></i> -->
                                        <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword" name="confirmpass" required>
                                    </div>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Register</span> <i class="icon-arrow-right"></i>
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