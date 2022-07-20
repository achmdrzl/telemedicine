<div class="content-body">
  <div class="container">
    <h3 class="text-center"><u>Profil Dokter<u></h3>

    <div class="col-sm-6 col-md-6 col-lg-4 mx-auto mt-3">
      <div class="image">
        <img src="<?= base_url() ?>assets/pasien/images/logo/logo-small.png" alt="profil">
        <span>edit profil</span>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <?php foreach ($detail as $profil) : ?>
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $profil['NAMA_DOKTER']; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" value="<?= $profil['EMAIL_DOKTER']; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="hp" class="form-label">No HP</label>
              <input type="text" class="form-control" id="hp" value="<?= $profil['HP_DOKTER']; ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="spesialis" class="form-label">Spesialis</label>
              <input type="text" class="form-control" id="spesialis" value="<?= $profil['SPESIALISASI']; ?>" readonly>
            </div>
          </form>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>