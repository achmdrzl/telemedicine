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
                                    <div class="col-sm-6 col-md-6 col-lg-4 mx-auto">
                                        <div class="image">
                                            <img src="<?= $db['FILE_FOTO']; ?>" alt="profil">
                                            <span>edit profil</span>
                                        </div>
                                    </div>
                                    <div class="product__action">
                                        <a href="<?php echo site_url('profil_pasien/editProfile/' . $db['ID_PASIEN']); ?>" class="btn btn__primary btn__rounded mb-3">
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
                                        <label for="hp" class="form-label">No HP</label>
                                        <input type="text" class="form-control" id="hp" name="hp" value="<?= $db['HP_PASIEN'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $db['NIK_PASIEN'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelahiran" class="form-label">Tempat, Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="kelahiran" name="kelahiran" value="<?= $db['KELAHIRAN'] ?>, <?= format_indo($db['TGL_LAHIR']) ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jk" name="jk" value="<?= $db['JENIS_KELAMIN'] ?>" readonly>
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
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $db['ALAMAT_PASIEN'] ?>, Kelurahan <?= $db['NAMA_DESA'] ?>, Kecamatan <?= $db['NAMA_KEC'] ?>, Kabupaten <?= $db['NAMA_KAB'] ?>, Provinsi <?= $db['NAMA_PROV'] ?>" readonly>
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