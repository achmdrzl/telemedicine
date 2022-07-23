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
                        if ($this->session->flashdata('error') != '') {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '</div>';
                        }
                        ?>
                        <form class="form-group" method="post" action="<?php echo site_url(); ?>auth/forgotPass">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Reset Password</h4>
                                    <p class="contact-panel__desc mb-30">Masukkan Alamat Email Anda yang Sudah Terdaftar
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-envelope form-group-icon"></i>
                                        <input type="number" class="form-control" placeholder="Masukkan Email" id="contact-email" name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Lupa Password</span> <i class="icon-arrow-right"></i>
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