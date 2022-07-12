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
                        <form class="form-group" method="post" action="<?php echo base_url(); ?>doktermain/process_register">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Register</h4>
                                    <p class="contact-panel__desc mb-30">Silahkan Mengisikan Form Berikut dengan Data yang Benar
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" id="name " name="name" value="<?= set_value('name') ?>" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-envelope form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-lock form-group-icon"></i>
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-phone form-group-icon"></i>
                                        <input type="number" class="form-control" placeholder="No. Handphone" id="nohp" name="nohp" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="fa fa-phone form-group-icon"></i>
                                        <input type="number" class="form-control" placeholder="Spesialis" id="spesialis" name="spesialis" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <!-- <label for="sesi" class="form-label">Pilih Sesi</label> -->
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
                                        <span>Register</span> <i class="icon-arrow-right"></i>
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