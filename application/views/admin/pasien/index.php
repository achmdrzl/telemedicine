<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
      <div class="mr-auto">
        <h2 class="text-black font-w600">Pasien</h2>
        <p class="mb-0">Hospital Admin Dashboard Template</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="table-responsive card-table">
          <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
            <thead class="text-center">
              <tr>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Status Akun</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
              foreach ($pasien as $row) :
              ?>
                <tr>
                  <td><?= $row['ID_PASIEN']; ?></td>
                  <td><?= $row['NAMA_PASIEN']; ?></td>
                  <td><?= $row['EMAIL_PASIEN']; ?></td>
                  <td><?= $row['HP_PASIEN']; ?></td>
                  <td>
                    <?php
                    if ($row['JENIS_KELAMIN'] == 'L') {
                      echo ('Laki-Laki');
                    } else {
                      echo ('Perempuan');
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    if ($row['STATUS_AKUN'] == NULL) :
                    ?>
                      <h5>
                        <span class="badge badge-warning">
                          <i class="fa fa-circle text-primary mr-1"></i>
                          Menunggu Konfirmasi
                        </span>
                      </h5>
                    <?php
                    elseif ($row['STATUS_AKUN'] == 1) :
                    ?>
                      <h5>
                        <span class="badge badge-success">
                          <i class="fa fa-circle text-primary mr-1"></i>
                          Terkonfirmasi
                        </span>
                      </h5>
                    <?php endif; ?>
                    <!-- <h5>
                      <span class="badge badge-danger">
                        <i class="fa fa-circle text-primary mr-1"></i>
                        Ditolak
                      </span>
                    </h5> -->
                  </td>
                  <td>
                    <a href="pasien/detail/<?= $row['ID_PASIEN']; ?>" class="btn btn-primary"> Detail</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->