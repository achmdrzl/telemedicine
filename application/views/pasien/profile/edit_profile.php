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
                                        <select name="pekerjaan" id="pekerjaan" class="form-control">
                                            <option></option>
                                            <?php foreach ($pekerjaan as $row) : ?>
                                                <option <?= ($row['ID_PEKERJAAN'] == $db['ID_PEKERJAAN'] ? 'selected' : '') ?> value="<?= $row['ID_PEKERJAAN'] ?>"><?= $row['NAMA_PEKERJAAN']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('pekerjaan'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gol" class="form-label">Golongan Darah</label>
                                        <select name="gol" id="gol" class="form-control">
                                            <option></option>
                                            <?php foreach ($gol as $row) : ?>
                                                <option <?= ($row['ID_GOL'] == $db['ID_GOL'] ? 'selected' : '') ?> value="<?= $row['ID_GOL'] ?>"><?= $row['NAMA_GOL']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('gol'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi">
                                            <option></option>
                                            <?php foreach ($provinsi as $row) : ?>
                                                <option value="<?= $row['ID_PROV'] ?>"><?= $row['NAMA_PROV']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('prov'); ?></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kabupaten" class="form-label">Kabupaten</label>
                                        <select name="kabupaten" id="kabupaten" class="form-select">
                                            <option></option>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('kab'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <select name="kecamatan" id="kecamatan" class="form-select">
                                            <option></option>
                                        </select>
                                        <div id="error" class="form-text text-danger"><?= form_error('kec'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelurahan" class="form-label">Kelurahan</label>
                                        <select name="kelurahan" id="kelurahan" class="form-select">
                                            <option></option>
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

<script>
    $(document).ready(function() {
        $('#gol').select2({
            placeholder: "Pilih Golongan Darah",
            allowClear: true
        });
        $('#pekerjaan').select2({
            placeholder: "Pilih Pekerjaan",
            allowClear: true
        });
        $('#provinsi').select2({
            placeholder: "Pilih Provinsi",
            allowClear: true
        });
        $('#kabupaten').select2({
            placeholder: "Pilih Kabupaten/Kota",
            allowClear: true
        });
        $('#kecamatan').select2({
            placeholder: "Pilih Kecamatan",
            allowClear: true
        });
        $('#kelurahan').select2({
            placeholder: "Pilih Kelurahan/Desa",
            allowClear: true
        });
    })
    $(document).ready(function() {
        $("#kabupaten").hide();
        $("#kecamatan").hide();
        $("#kelurahan").hide();
        loadkabupaten();
        loadkecamatan();
        loadkelurahan();
    });

    function loadkabupaten() {
        $("#provinsi").change(function() {
            var getprovinsi = $("#provinsi").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url(); ?>pasien_login/getDataKabupaten",
                data: {
                    provinsi: getprovinsi
                },
                success: function(data) {
                    console.log(data);
                    var html = "";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].ID_KAB + '">' + data[i].NAMA_KAB + '</option>';
                    }
                    $("#kabupaten").html(html);
                    $("#kabupaten").show();
                }
            });
        });
    }

    function loadkecamatan() {
        $("#kabupaten").change(function() {
            var getkabupaten = $("#kabupaten").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url(); ?>pasien_login/getDataKecamatan",
                data: {
                    kabupaten: getkabupaten
                },
                success: function(data) {
                    console.log(data);
                    var html = "";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].ID_KEC + '">' + data[i].NAMA_KEC + '</option>';
                    }
                    $("#kecamatan").html(html);
                    $("#kecamatan").show();
                }
            });
        });
    }

    function loadkelurahan() {
        $("#kecamatan").change(function() {
            var getkecamatan = $("#kecamatan").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url(); ?>pasien_login/getDataKelurahan",
                data: {
                    kecamatan: getkecamatan
                },
                success: function(data) {
                    console.log(data);
                    var html = "";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].ID_DESA + '">' + data[i].NAMA_DESA + '</option>';
                    }
                    $("#kelurahan").html(html);
                    $("#kelurahan").show();
                }
            });
        });
    }
</script>