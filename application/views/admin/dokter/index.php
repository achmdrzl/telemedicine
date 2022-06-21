		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dokter</h2>
						<p class="mb-0">Dashboard Admin RSUD Kabupaten Jombang</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard table-responsive-xl">
								<thead class="text-center">
									<tr>
										<th>Profile</th>
										<th>ID Dokter</th>
										<th>Nama</th>
										<th>Spesialis</th>
										<th>Kontak</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<?php foreach ($dokter as $Dokter) : ?>
											<td>
												<img src="assets/images/<?= $Dokter['PROFIL_DOKTER'] ?>" alt="" width="43">
											</td>
											<td><span class="text-nowrap"><?= $Dokter['ID_DOKTER']; ?></span></td>
											<td><?= $Dokter['NAMA_DOKTER']; ?></td>
											<td><?= $Dokter['SPESIALISASI']; ?></td>
											<td><span class="text-nowrap"><?= $Dokter['HP_DOKTER']; ?></span></td>
											<td>
												<?php
												if ($Dokter['STATUS_DOKTER'] == 1) {
													echo ('<h5>
													<span class="badge badge-success">
														<i class="fa fa-circle text-primary mr-1"></i>
														Tersedia
													</span>
												</h5>');
												} else {
													echo ('<h5>
													<span class="badge badge-danger">
														<i class="fa fa-circle text-primary mr-1"></i>
														Tidak Tersedia
													</span>
												</h5>');
												}
												?>
											</td>
											<td>
												<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $Dokter['ID_DOKTER'] ?>">
													Ubah Status Dokter
												</button>
											</td>
										<?php endforeach; ?>
									</tr>
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
		<!-- Modal -->
		<div class="modal fade" id="exampleModal<?= $Dokter['ID_DOKTER'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ubah Status Dokter</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						Yakin ingin mengubah status dokter?
					</div>
					<div class="modal-footer">
						<a href="dokter/update_status/<?= $Dokter['ID_DOKTER']; ?>" class="btn btn-success">Ubah Status Dokter</a>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>