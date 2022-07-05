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
                        <form class="form-group" method="POST" action="">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Profile Pasien</h4>
                                    <p class="contact-panel__desc mb-30">Silahkan Melengekapi Data Berikut dengan Data yang Benar, Sebelum Melakukan Konsultasi
                                    </p>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="product__img">
                                            <?php if ($db['FILE_FOTO'] !== NULL) : ?>
                                                <img src="<?= $db['FILE_FOTO']; ?>" alt="foto_pasien" class="rounded mx-auto d-block">
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
                                        <div id="error" class="form-text text-danger"><?= form_error('nik'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelahiran" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="kelahiran" name="kelahiran" value="<?= $db['KELAHIRAN'] ?>">
                                        <div id="error" class="form-text text-danger"><?= form_error('kelahiran'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $db['TGL_LAHIR'] ?>">
                                        <div id="error" class="form-text text-danger"><?= form_error('tgl_lahir'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <select name="pekerjaan" id="pekerjaan">
                                            <option selected>Pilih Pekerjaan</option>
                                            <?php foreach ($pekerjaan as $row) : ?>
                                                <?php if ($row['ID_PEKERJAAN'] == $db['ID_PEKERJAAN']) : ?>
                                                    <option value="<?= $row['ID_PEKERJAAN'] ?>" selected><?= $row['NAMA_PEKERJAAN']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $row['ID_PEKERJAAN'] ?>"><?= $row['NAMA_PEKERJAAN']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('pekerjaan'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gol" class="form-label">Golongan Darah</label>
                                        <select class="form-select" size="5" id="gol" name="gol">
                                            <option selected>Pilih Golongan Darah</option>
                                            <?php foreach ($gol as $row) : ?>
                                                <?php if ($row['ID_GOL'] == $db['ID_GOL']) : ?>
                                                    <option value="<?= $row['ID_GOL'] ?>" selected><?= $row['NAMA_GOL']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $row['ID_GOL'] ?>"><?= $row['NAMA_GOL']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('gol'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <select name="provinsi" id="provinsi">
                                            <option selected>Pilih Provinsi</option>
                                            <?php foreach ($provinsi as $prov) : ?>
                                                <option value="<?= $prov['ID_PROV'] ?>" selected><?= $prov['NAMA_PROV']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('prov'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kabupaten" class="form-label">Kabupaten</label>
                                        <select name="kabupaten" id="kabupaten">

                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('kab'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Kecamatan</label>
                                        <select name="kecamatan" id="kecamatan">

                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('kec'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Kelurahan</label>
                                        <select name="kelurahan" id="kelurahan">

                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('kel'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $db['ALAMAT_PASIEN'] ?>">
                                        <div id="error" class="form-text text-danger"><?= form_error('alamat'); ?></div>
                                    </div>
                                    <button type="submit" class="btn btn__primary btn__rounded mt-3">
                                        <span>Edit Profile</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</section>