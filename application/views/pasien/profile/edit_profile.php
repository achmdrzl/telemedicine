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
                        <form class="form-group" method="POST" action="<?= base_url('pasien_login/updateProfile/' . $this->session->ID_PASIEN); ?>">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Profile Pasien</h4>
                                    <p class="contact-panel__desc mb-30">Silahkan Melengekapi Data Berikut dengan Data yang Benar, Sebelum Melakukan Konsultasi
                                    </p>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="product__img">
                                            <?php if ($db['FILE_FOTO'] !== NULL) : ?>
                                                <img src="<?php echo $db['FILE_FOTO']; ?>" alt="foto_pasien" loading="lazy">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $db['NAMA_PASIEN'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $db['EMAIL_PASIEN'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $db['NIK_PASIEN'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelahiran" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="kelahiran" name="kelahiran" value="<?= $db['KELAHIRAN'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $db['TGL_LAHIR'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <select name="pekerjaan" id="pekerjaan" class="form-control" size="10">
                                            <option selected>Pilih Pekerjaan</option>
                                            <?php foreach ($pekerjaan as $row) : ?>
                                                <option value="<?= $row['ID_PEKERJAAN'] ?>"><?= $row['NAMA_PEKERJAAN']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gol" class="form-label">Golongan Darah</label>
                                        <select class="form-select" size="5">
                                            <option selected>Pilih Golongan Darah</option>
                                            <?php foreach ($gol as $row) : ?>
                                                <option value="<?= $row['ID_GOL'] ?>"><?= $row['NAMA_GOL']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

</section>