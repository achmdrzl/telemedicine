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
        <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" value="">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="">
          </div>
          <div class="mb-3">
            <label for="hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="hp" value="">
          </div>
          <div class="mb-3">
            <label for="spesialis" class="form-label">Spesialis</label>
            <input type="text" class="form-control" id="spesialis" value="">
          </div>
          <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" value="">
          </div>
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-secondary btn-block">Kembali</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-primary btn-block">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>