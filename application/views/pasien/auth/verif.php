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
                        <form method="post" action="">
                            <?php
                            $pesan = 'Hati-hati penipuan, berikut nomor OTP Anda untuk verifikasi pada platform Telemedicine RSUD Kabupaten Jombang : ' . $OTP;
                            ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Verifikasi OTP</h4>
                                    <p class="contact-panel__desc mb-30">Silahkan Cek Whatsapp Anda & Masukkan 4 Digit Angka
                                    </p>
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <i class="fa fa-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Kode OTP" id="otp" name="otp" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-4">
                                    <button type="button" class="btn btn__secondary btn__rounded btn__block btn__xhight" data-no="<?= $HP_PASIEN ?>" data-pesan="<?= $pesan ?>" onclick="kirimpesanotp(this)">
                                        <span>Kirim Kode</span> <i class="icon-arrow-right"></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
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
<script>
    function kirimpesanotp(el) {
        let no = $(el).data("no");
        let psn = $(el).data("pesan");
        $.ajax({
            url: "http://127.0.0.1:4774/kirimpesan",
            method: "POST",
            cache: false,
            dataType: "json",
            data: {
                nomor: no,
                pesan: psn
            },
            success: function(x) {
                let data = JSON.parse(JSON.stringify(x));
                alert(data.status);
            },
            error: function(c) {
                alert("Pesan Gagal Dikirim");
            }
        });
    }
</script>