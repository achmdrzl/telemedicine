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
                        <th>Telepon</th>
                        <th>Status Resep</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    foreach ($pasien as $p) :
                    ?>
                        <tr>
                            <td><?= $p['ID_PASIEN'] ?></td>
                            <td><?= $p['NAMA_PASIEN'] ?></td>
                            <td><?= $p['EMAIL_PASIEN'] ?></td>
                            <td><?= $p['HP_PASIEN'] ?></td>
                            <td>
                                <a href="<?= site_url('resepdokter/resep/' . $p['ID_PASIEN']); ?>" class="btn btn-warning btn-sm" id="btn-edit-user" data-toggle="modal" data-target="#tambahresep" data-id_user="{{$u->id_user}}" data-name="{{$u->name}}" data-email="{{$u->email}}" data-password="{{$u->password}}" data-roles="{{$u->roles}}"></a>
                            </td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal tambah resep  -->
<div class="modal fade" id="tambahresep" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold " id="exampleModalLongTitle"><i class="fas fa-user text-purple"></i> Form Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid px-4">
                    <form action="{{route('update.id')}}" method="POST" enctype="multipart/form-data" class="mr-8">
                        <input type="hidden" class="form-control" name="id_user" id="edit-id_user"><br>
                        <div class="form-group row">
                            <label for="nama" class="form-label">Id Pasien</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">Nama Pasien</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">No Hp</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">Nik</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">Obat</label>
                            <div class="col-sm-10">
                                <select name="obat" id="obat" class="select">
                                    <option>Pilih Obat</option>
                                    <?php foreach ($obat as $p) : ?>
                                        <option value="<?= $p['ID_OBAT'] ?>"><?= ($p['NAMA_OBAT']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">Resep diberikan</label>
                            <div class="col-sm-10">
                                <p id="date"></p>
                                <script>
                                    n = new Date();
                                    y = n.getFullYear();
                                    m = n.getMonth() + 1;
                                    d = n.getDate();
                                    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
                                </script>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">Nama Dokter</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" value="">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-purple">Simpan</button>
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>