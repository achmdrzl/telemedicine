		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Detail Pasien</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<?php
						foreach ($detail_pasien as $detail) :
						?>
							<form>
								<div class="mb-3">
									<label for="id" class="form-label">ID Pasien</label>
									<input type="text" class="form-control" id="id" name="id" value="<?= $detail['ID_PASIEN'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="nik" class="form-label">NIK Pasien</label>
									<input type="text" class="form-control" id="nik" name="nik" value="<?= $detail['NIK_PASIEN'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="nama" class="form-label">Nama Pasien</label>
									<input type="text" class="form-control" id="nama" name="nama" value="<?= $detail['NAMA_PASIEN'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="tgl_lahir" class="form-label">Tempat, Tanggal Lahir Pasien</label>
									<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $detail['KELAHIRAN'] ?>, <?= $detail['TGL_LAHIR'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="jk" class="form-label">Jenis Kelamin</label>
									<?php
									if ($detail['JENIS_KELAMIN'] == 'L') {
										echo ('<input type="text" class="form-control" id="jk" name="jk" value="Laki-Laki" readonly>
										');
									} else {
										echo ('<input type="text" class="form-control" id="jk" name="jk" value="Perempuan" readonly>
										');
									}
									?>
								</div>
								<div class="mb-3">
									<label for="pekerjaan" class="form-label">Pekerjaan Pasien</label>
									<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $detail['NAMA_PEKERJAAN'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="telp" class="form-label">Telp Pasien</label>
									<input type="text" class="form-control" id="telp" name="telp" value="<?= $detail['HP_PASIEN'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label">Email Pasien</label>
									<input type="text" class="form-control" id="email" name="email" value="<?= $detail['EMAIL_PASIEN'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="gol" class="form-label">Golongan Darah Pasien</label>
									<input type="text" class="form-control" id="gol" name="gol" value="<?= $detail['NAMA_GOL'] ?>" readonly>
								</div>
								<div class="mb-3">
									<label for="ktp" class="form-label">KTP Pasien</label><br>
									<img src="<?= base_url() ?>assets/images/<?= $detail['FILE_KTP'] ?>" alt="FOTO KTP <?= $detail['NAMA_PASIEN'] ?>" class="ktp">
								</div>
								<div class="mb-3">
									<label for="ktp" class="form-label">Status Akun</label>
									<?php
									if ($detail['STATUS_AKUN'] == NULL || $detail['STATUS_AKUN'] == 0) :
									?>
										<h5>
											<span class="badge badge-warning">
												<i class="fa fa-circle text-primary mr-1"></i>
												Menunggu Konfirmasi
											</span>
										</h5>
										<div class="row">
											<div class="col-md-6">
												<a href="<?= base_url() ?>pasien/verifikasi/<?= $detail['ID_PASIEN'] ?>" class="btn btn-success btn-block">Verifikasi</a>
											</div>
											<div class="col-md-6">
												<button class="btn btn-danger btn-block">Tolak</button>
											</div>
										</div>
									<?php
									elseif ($detail['STATUS_AKUN'] == 1) :
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
								</div>
							</form>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->