<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout2 bg-overlay text-center">
  <!-- ==========================
        contact layout 2
    =========================== -->
  <section class="contact-layout2 pt-0 mt-2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="contact-panel">
          <form class="form-group" method="POST" action="<?= site_url('profil_pasien/uploadKTP'); ?>" enctype="multipart/form-data">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-12">
                <h4 class="contact-panel__title">Form Unggah Foto KTP</h4>
                <p class="contact-panel__desc mb-30">Silahkan Mengunggah Foto KTP Anda Sebagai Syarat Verifikasi Akun
                </p>
                <div class="mb-3">
                  <label for="ktp" class="form-label">Upload Scan/Foto KTP</label>
                  <input type="file" class="form-control" id="ktp" name="ktp">
                </div>
                <button type="submit" class="btn btn__primary btn__rounded mt-3">
                  <span>Edit Profile</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</section>