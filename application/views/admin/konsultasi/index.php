		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Daftar Konsultasi</h2>
						<p class="mb-0">Dashboard Admin RSUD Kabupaten Jombang</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard table-responsive-xl">
								<thead class="text-center">
									<tr>
										<th>ID Konsultasi</th>
										<th>Nama Pasien</th>
										<th>Hari & Jam Konsultasi</th>
										<th>Nama Dokter</th>
										<th>Link Zoom</th>
										<th>Status Bayar</th>
										<th>Status Konsultasi</th>
										<th>Aksi</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="text-center">
									<?php foreach ($konsultasi as $konsul) : ?>
										<tr>
											<td><span class="text-nowrap"><?= $konsul['ID_KONSUL']; ?></span></td>
											<td><?= $konsul['NAMA_PASIEN']; ?></td>
											<td><?= $konsul['TGL_KONSUL']; ?></td>
											<td><?= $konsul['NAMA_DOKTER']; ?></td>
											<td><?= $konsul['LINK_ZOOM']; ?></td>
											<td>
												<?php if ($konsul['STATUS_BAYAR_BOOKING'] == NULL) : ?>
													<h5>
														<span class="badge badge-success">
															<i class="fa fa-circle text-primary mr-1"></i>
															Lunas
														</span>
													</h5>
												<?php elseif ($konsul['STATUS_BAYAR_BOOKING'] == 1) : ?>
													<h5>
														<span class="badge badge-danger">
															<i class="fa fa-circle text-primary mr-1"></i>
															Belum Dibayar
														</span>
													</h5>
												<?php endif; ?>
											</td>
											<!-- <td>
												<h5>
													<span class="badge badge-success">
														<i class="fa fa-circle text-primary mr-1"></i>
														Sudah Dilayani
													</span>
												</h5>
												<h5>
													<span class="badge badge-danger">
														<i class="fa fa-circle text-primary mr-1"></i>
														Belum Dilayani
													</span>
												</h5>
											</td>
											<td>
												<a href="#" class="btn btn-warning">
													Ubah Jadwal
												</a>
												<a href="#" class="btn btn-secondary">
													Ubah Jadwal
												</a>
											</td> -->
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