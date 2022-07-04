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
                <div class="card">
                    <div class="contact-panel d-flex flex-wrap">
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
                                                    <img src="<?php echo $db['FILE_FOTO']; ?>" alt="foto_pasien" loading="lazy">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="nama" class="form-control" id="nama" name="nama" value="<?= $db['NAMA_PASIEN'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= $db['EMAIL_PASIEN'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="nik" class="form-control" id="nik" name="nik" value="<?= $db['NIK_PASIEN'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelahiran" class="form-label">Tempat, Tanggal Lahir</label>
                                            <input type="kelahiran" class="form-control" id="kelahiran" name="kelahiran" value="<?= $db['KELAHIRAN'] ?>, <?= $db['TGL_LAHIR'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Pekerjaan</option>
                                                <?php foreach ($pekerjaan as $row) : ?>
                                                    <option value="<?= $row['ID_PEKERJAAN'] ?>"><?= $row['NAMA_PEKERJAAN']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="gol" class="form-label">Golongan Darah</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Golongan Darah</option>
                                                <?php foreach ($gol as $row) : ?>
                                                    <option value="<?= $row['ID_GOL'] ?>"><?= $row['NAMA_GOL']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="alamat" class="form-control" id="alamat" name="alamat">
                                        </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>