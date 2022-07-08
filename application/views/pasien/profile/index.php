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
                <div class="contact-panel">
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
                                                <img src="<?php echo $db['FILE_FOTO']; ?>" alt="foto_pasien" class="rounded mx-auto d-block">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="product__action">
                                        <a href="<?php echo site_url('pasien_login/editProfile/' . $this->session->ID_PASIEN); ?>" class="btn btn__primary btn__rounded mb-3">
                                            <i class="icon-cart"></i> <span>Edit Profile</span>
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $db['NAMA_PASIEN'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $db['EMAIL_PASIEN'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $db['NIK_PASIEN'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelahiran" class="form-label">Tempat, Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="kelahiran" name="kelahiran" value="<?= $db['KELAHIRAN'] ?>, <?= $db['TGL_LAHIR'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $db['NAMA_PEKERJAAN'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gol" class="form-label">Golongan Darah</label>
                                        <input type="text" class="form-control" id="gol" name="gol" value="<?= $db['NAMA_GOL'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $db['NAMA_PROV'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kab_kota" class="form-label">Kabupaten/Kota</label>
                                        <input type="text" class="form-control" id="kab_kota" name="kab_kota" value="<?= $db['NAMA_KAB'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $db['NAMA_KEC'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelurahan" class="form-label">Kelurahan/Desa</label>
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $db['NAMA_DESA'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $db['ALAMAT_PASIEN'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

</section>