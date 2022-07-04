		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Data Area</h2>
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
										<th>ID Kecamatan</th>
										<th>Nama Kecamatan</th>
										<th>Harga</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<?php foreach ($master_pengiriman as $pengiriman) : ?>
										<tr>
											<td><span class="text-nowrap"><?= $pengiriman['ID_KEC']; ?></span></td>
											<td><?= $pengiriman['NAMA_KEC']; ?></td>
											<td><?= $pengiriman['BIAYA_ONGKIR']; ?></td>
											<td>
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $pengiriman['ID_KEC'] ?>">
													Detail
												</button>
											</td>
										</tr>
										<!-- Modal -->
										<div class="modal fade" id="exampleModal<?= $pengiriman['ID_KEC'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Biaya Ongkir Per Kecamatan</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form action="pengiriman/ubahOngkir" method="POST">
															<input type="hidden" name="id_kec" id="id_kec" value="<?= $pengiriman['ID_KEC'] ?>">
															<div class="mb-3">
																<label for="id_kec" class="form-label">ID Kecamatan</label>
																<input type="id_kec" class="form-control" id="id_kec" value="<?= $pengiriman['ID_KEC']; ?>" readonly>
															</div>
															<div class="mb-3">
																<label for="nama_kec" class="form-label">Nama Kecamatan</label>
																<input type="nama_kec" class="form-control" id="nama_kec" value="<?= $pengiriman['NAMA_KEC']; ?>" readonly>
															</div>
															<div class="mb-3">
																<label for="biaya_ongkir" class="form-label">Biaya Ongkir</label>
																<input type="biaya_ongkir" class="form-control" id="biaya_ongkir" name="biaya_ongkir" value="<?= $pengiriman['BIAYA_ONGKIR']; ?>">
															</div>
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary">Ubah Ongkir</button>
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
														</form>

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