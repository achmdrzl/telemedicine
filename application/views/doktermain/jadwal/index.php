<div class="content-body">
  <div class="container">
    <div class="col-sm-6 col-md-6 col-lg-4 mx-auto mt-3">
      <div class="image">
        <img src="<?= base_url() ?>assets/pasien/images/logo/logo-small.png" alt="profil">
        <span>edit profil</span>
        <?= $this->session->NAMA_DOKTER; ?>
        <?= $this->session->SPESIALISASI; ?>
      </div>
    </div>

    <div class="table-responsive card-table">
      <table id="example5" class="display dataTablesCard table-responsive-xl">
        <thead class="text-center">
          <tr>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td>
              <?php
              foreach ($detail as $dt) :
                if ($dt['ID_JADWAL'] == 1) :
              ?>
                  <h5>
                    <?php foreach ($sesi as $s) :
                      if ($s['ID_SESI'] == $dt['ID_SESI']) : ?>
                        <div class="badge badge-success"><?= $s['JAM']; ?></div>
                    <?php endif;
                    endforeach; ?>
                  </h5>
              <?php endif;
              endforeach; ?>
            </td>
            <td>
              <?php
              foreach ($detail as $dt) :
                if ($dt['ID_JADWAL'] == 2) :
              ?>
                  <h5>
                    <?php foreach ($sesi as $s) :
                      if ($s['ID_SESI'] == $dt['ID_SESI']) : ?>
                        <div class="badge badge-success"><?= $s['JAM']; ?></div>
                    <?php endif;
                    endforeach; ?>
                  </h5>
              <?php endif;
              endforeach; ?>
            </td>
            <td>
              <?php
              foreach ($detail as $dt) :
                if ($dt['ID_JADWAL'] == 3) :
              ?>
                  <h5>
                    <?php foreach ($sesi as $s) :
                      if ($s['ID_SESI'] == $dt['ID_SESI']) : ?>
                        <div class="badge badge-success"><?= $s['JAM']; ?></div>
                    <?php endif;
                    endforeach; ?>
                  </h5>
              <?php endif;
              endforeach; ?>
            </td>
            <td>
              <?php
              foreach ($detail as $dt) :
                if ($dt['ID_JADWAL'] == 4) :
              ?>
                  <h5>
                    <?php foreach ($sesi as $s) :
                      if ($s['ID_SESI'] == $dt['ID_SESI']) : ?>
                        <div class="badge badge-success"><?= $s['JAM']; ?></div>
                    <?php endif;
                    endforeach; ?>
                  </h5>
              <?php endif;
              endforeach; ?>
            </td>
            <td>
              <?php
              foreach ($detail as $dt) :
                if ($dt['ID_JADWAL'] == 5) :
              ?>
                  <h5>
                    <?php foreach ($sesi as $s) :
                      if ($s['ID_SESI'] == $dt['ID_SESI']) : ?>
                        <div class="badge badge-success"><?= $s['JAM']; ?></div>
                    <?php endif;
                    endforeach; ?>
                  </h5>
              <?php endif;
              endforeach; ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>