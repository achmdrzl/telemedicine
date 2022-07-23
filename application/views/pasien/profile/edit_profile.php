<style>
    .select2-container .select2-selection--single {
        font-size: 14px;
        height: 60px;
        width: 100%;
        padding: 0 20px;
        border-radius: 55px;
        background-color: #ffffff;
        border: 2px solid #e6e8eb;
        text-align: left;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        content: '';
        position: absolute;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 12px;
        top: 50%;
        width: 20px;
        height: 20px;
        z-index: 1;
        border-radius: 50%;
        background-color: #213360;
    }
</style>


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
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="contact-panel">
                        <?php foreach ($pasien as $db) : ?>
                            <form class="form-group" method="POST" action="" enctype="multipart/form-data">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-sm-12">
                                        <h4 class="contact-panel__title">Profile Pasien</h4>
                                        <p class="contact-panel__desc mb-30">Silahkan Melengekapi Data Berikut dengan Data yang Benar, Sebelum Melakukan Konsultasi
                                        </p>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $db['NAMA_PASIEN'] ?>" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= $db['EMAIL_PASIEN'] ?>" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="hp" class="form-label">No HP Aktif</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="<?= $db['HP_PASIEN']; ?>" name="hp" id="hp" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $db['NIK_PASIEN'] ?>">
                                            <div id="error" class="form-text text-danger"><?= form_error('nik'); ?></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelahiran" class="form-label">Tempat Lahir</label>
                                            <select name="kelahiran" id="kelahiran" class="form-control">
                                                <option></option>
                                                <?php foreach ($kota as $row) : ?>
                                                    <option <?= ($row['NAMA_KAB'] == $db['KELAHIRAN'] ? 'selected' : '') ?> value="<?= $row['NAMA_KAB'] ?>"><?= $row['NAMA_KAB']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div id="error" class="form-text text-danger"><?= form_error('kelahiran'); ?></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $db['TGL_LAHIR'] ?>">
                                            <div id="error" class="form-text text-danger"><?= form_error('tgl_lahir'); ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                                <?php if ($db['JENIS_KELAMIN'] == NULL) :
                                                ?>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                <?php else : ?>
                                                    <?php if ($db['JENIS_KELAMIN'] == 'L') : ?>
                                                        <option value="L" selected>Laki-Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    <?php else : ?>
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P" selected>Perempuan</option>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </select>
                                            <div id="error" class="form-text text-danger"><?= form_error('pekerjaan'); ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                            <select name="pekerjaan" id="pekerjaan" class="form-control py-auto">
                                                <option></option>
                                                <?php foreach ($pekerjaan as $row) : ?>
                                                    <option <?= ($row['ID_PEKERJAAN'] == $db['ID_PEKERJAAN'] ? 'selected' : '') ?> value="<?= $row['ID_PEKERJAAN'] ?>"><?= $row['NAMA_PEKERJAAN']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div id="error" class="form-text text-danger"><?= form_error('pekerjaan'); ?></div>
                                        </div><!-- /.col-lg-6 -->
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
                                            <select class="form-control" aria-label="Default select example" name="provinsi" id="provinsi">
                                                <option></option>
                                                <?php foreach ($provinsi as $row) : ?>
                                                    <option <?= ($row['ID_PROV'] == $db['ID_PROV'] ? 'selected' : '') ?> value="<?= $row['ID_PROV'] ?>"><?= $row['NAMA_PROV']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div id="error" class="form-text text-danger"><?= form_error('prov'); ?></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kabupaten" class="form-label">Kabupaten</label>
                                            <select name="kabupaten" id="kabupaten" class="form-select">
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
                                        <button type="submit" class="btn btn__primary btn__rounded mt-3 btn-block">
                                            <span>Edit Profile</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <?php if ($db['FILE_KTP'] == NULL) : ?>
                                <h5>
                                    <span class="badge badge-primary">
                                        Silakan lengkapi identitas Anda dengan mengunggah foto KTP
                                    </span>
                                </h5>
                                <a href="<?= site_url('profil_pasien/upload'); ?>" class="btn btn__primary btn__rounded mt-2 btn-block">Upload KTP</a>
                            <?php elseif ($this->session->flashdata('upload')) : ?>
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    KTP <strong>berhasil</strong> <?= $this->session->flashdata('upload'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <?php if ($db['STATUS_NOMOR'] == NULL) : ?>
                                <h5 class="mt-3">
                                    <span class="badge badge-primary">
                                        Silakan verifikasi nomor telpon Anda
                                    </span>
                                </h5>
                                <a href="<?= site_url('auth/verif'); ?>" class="btn btn__primary btn__rounded mt-2 btn-block">Verifikasi Nomor Telpon</a>
                            <?php elseif ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    Nomor telpon <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
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
        $('#kelahiran').select2({
            placeholder: "Pilih Tempat Lahir",
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
        loadkabupaten();
        loadkecamatan();
        loadkelurahan();
    });

    function loadkabupaten() {
        $("#provinsi").change(function() {
            var getprovinsi = $("#provinsi").val();
            var id_kabupaten = '<?= $db['ID_KAB'] ?>';
            console.log(id_kabupaten);
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url(); ?>profil_pasien/getDataKabupaten",
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
                url: "<?= base_url(); ?>profil_pasien/getDataKecamatan",
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
                url: "<?= base_url(); ?>profil_pasien/getDataKelurahan",
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
                }
            });
        });
    }
</script>