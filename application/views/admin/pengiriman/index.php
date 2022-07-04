		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Data Pengiriman</h2>
						<p class="mb-0">Dashboard Admin RSUD Kabupaten Jombang</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<?php if ($this->session->flashdata('ubah_ongkir')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								Kuota <strong>berhasil</strong> <?= $this->session->flashdata('ubah_ongkir'); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard table-responsive-xl">
								<thead class="text-center">
									<tr>
										<th>ID Pengiriman</th>
										<th>Nama Pasien</th>
										<th>Tanggal Pengiriman</th>
										<th>Nama Kurir</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<?php foreach ($pengiriman as $row) : ?>
										<tr>
											<td><span class="text-nowrap"><?= $row['ID_PENGIRIMAN']; ?></span></td>
											<td><?= $row['NAMA_PASIEN']; ?></td>
											<td><?= $row['TGL_PENGIRIMAN']; ?></td>
											<td><?= $row['NAMA_KURIR'] ?></td>
											<td>
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $pengiriman['ID_KEC'] ?>">
													Detail
												</button>
											</td>
										</tr>
										<!-- Modal -->
										<div class="modal fade" id="exampleModal<?= $pengiriman['ID_PENGIRIMAN'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Detail Pengiriman</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="mb-3">
																<label for="id_pasien" class="form-label">ID Pasien</label>
																<input type="id_pasien" class="form-control" id="id_pasien" value="<?= $pengiriman['ID_PASIEN']; ?>" readonly>
															</div>
															<div class="mb-3">
																<label for="nama_pasien" class="form-label">Nama Pasien</label>
																<input type="nama_pasien" class="form-control" id="nama_pasien" value="<?= $pengiriman['NAMA_PASIEN']; ?>" readonly>
															</div>
															<div class="mb-3">
																<label for="email_pasien" class="form-label">Email Pasien</label>
																<input type="email_pasien" class="form-control" id="email_pasien" name="email_pasien" value="<?= $pengiriman['EMAIL_PASIEN']; ?>">
															</div>
															<div class="mb-3">
																<label for="alamat_pasien" class="form-label">Alamat Pasien</label>
																<input type="alamat_pasien" class="form-control" id="alamat_pasien" name="alamat_pasien" value="<?= $pengiriman['ALAMAT_PASIEN']; ?>">
															</div>
															<div class="mb-3">
																<label for="tanggal_kirim" class="form-label">Tanggal Pengiriman Obat</label>
																<input type="tanggal_kirim" class="form-control" id="tanggal_kirim" name="tanggal_kirim" value="<?= $pengiriman['TGL_PENGIRIMAN']; ?>">
															</div>

															<!-- tabel resep -->

														</form>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
														</div>
													</div>
												</div>
											</div>
										</div>
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