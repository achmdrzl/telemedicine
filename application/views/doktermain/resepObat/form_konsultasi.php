<div class="content-body">
    <div class="container">
        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto mt-3 mb-3">
            
        </div>

        <div class="table-responsive card-table">
        <div class="container-fluid px-4">
                    <form action="<?php echo base_url('resep_dokter/aksikonsul') ?>" method="POST" enctype="multipart/form-data" class="mr-8">
                        <?php foreach ($konsul as $db):

                        ?>
                        <input type="hidden" class="form-control" name="id_user" id="edit-id_user"><br>
                        <div class="form-group row">
                            <label for="id_konsul" class="form-label">Id Konsul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $db['ID_KONSUL']?>" disabled>
                                <input type="hidden" class="form-control"  name="id_konsul" value="<?php echo $db['ID_KONSUL']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_pasien" value="<?php echo $db['NAMA_PASIEN']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email_pasien" value="<?php echo $db['EMAIL_PASIEN']?>">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="email" class="form-label">Obat</label>
                            <div class="col-sm-10">
                                <select name="obat" id="obat" class="select">
                                    <option>Pilih Obat</option>
                                    <?php foreach ($obat as $p) : ?>
                                        <option value="<?= $p['ID_OBAT'] ?>"><?= ($p['NAMA_OBAT']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
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
                        </div> -->
                        <div class="form-group row">
                            <label for="hasil_konsul" class="form-label">Hasil Konsul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hasil_konsul">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_dokter" class="form-label">Nama Dokter</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_dokter"value="<?php echo $db['NAMA_DOKTER']?>" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-purple">Simpan</button>
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        <?php endforeach; ?>
                    </form>
                </div>
        </div>
    </div>
</div>