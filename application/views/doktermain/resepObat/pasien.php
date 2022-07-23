<div class="content-body">
    <div class="container">
        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto mt-3 mb-3">
            <div class="image">
                <img src="<?= base_url() ?>assets/pasien/images/logo/logo-small.png" alt="profil">
                <span>edit profil</span>
            </div>
            <div class="text-center">
                Dr.Bony
                Umum
            </div>
        </div>

        <div class="table-responsive card-table">
            <table id="example5" class="table display dataTablesCard table-responsive-xl">
                <thead class="text-center">
                    <tr>
                        <th>ID Pasien</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Keluhan</th>
                        <th>HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    foreach ($konsultasi as $k) :
                    ?>  
                    <form action="" method="POST">
						<?php
						$pesan = 'Silahkan klik link berikut untuk link zoom konsultasinya ' . $k['LINK_ZOOM'];
						?>
                        <tr>
                            <td><?= $k['ID_PASIEN'] ?></td>
                            <td><?= $k['NAMA_PASIEN'] ?></td>
                            <td><?= $k['EMAIL_PASIEN'] ?></td>
                            <td><?= $k['KELUHAN'] ?></td>
                            <td><?= $k['HP_PASIEN'] ?></td>
                            <td>
                                <a href="<?= site_url('resep_dokter/formHasilKonsul/' . $k['ID_KONSUL']); ?>" class="btn btn-warning btn-sm btn-block" id="btn-edit-user">Hasil Konsul</a>
								<a data-id_konsul="<?= $k['ID_KONSUL'] ?>" data-no="<?= $k['HP_PASIEN'] ?>" data-pesan="<?= $pesan ?>" onclick="kirimpesanzoom(this)" class="btn btn-success btn-block">Kirim Notifikasi Zoom</a>
                                <a href="<?= $k['LINK_ZOOM']; ?>" class="btn btn-primary btn-sm btn-block" id="btn-edit-user">Link Zoom</a>
                                
                            </td>
                            <td></td>
                        </tr>
                    </form>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>