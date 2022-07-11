		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Jadwal</h2>
						<p class="mb-0">Dashboard Admin RSUD Kabupaten Jombang</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- alert -->
						<?php if ($this->session->flashdata('ubah_kuota')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								Kuota <strong>berhasil</strong> <?= $this->session->flashdata('ubah_kuota'); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<!-- end alert -->
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard table-responsive-xl">
								<thead class="text-center">
									<tr>
										<th>Nama Dokter</th>
										<th>Senin</th>
										<th>Selasa</th>
										<th>Rabu</th>
										<th>Kamis</th>
										<th>Jumat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<td></td>
										<form method="post" action="jadwal/ubahKuota">
											<?php
											foreach ($jadwal as $j) :
											?>
												<td>
													<div class="mb-3">
														<input type="number" class="form-control-plaintext text-center" id="<?= $j['HARI'] ?>" name="<?= $j['HARI'] ?>" value="<?= $j['KUOTA'] ?>">
													</div>
												</td>
											<?php endforeach; ?>
											<td>
												<button type="submit" class="btn btn-warning">Edit Kuota</button>
											</td>
										</form>
									</tr>
									<?php foreach ($dokters as $dokter) : ?>
										<tr>
											<td>
												<img src="<?= base_url() ?>assets/admin/images/<?= $dokter['PROFIL_DOKTER'] ?>" alt="dokter <?= $dokter['NAMA_DOKTER'] ?>" class="foto_jadwal"><br>
												<span>
													<?= $dokter['NAMA_DOKTER']; ?><br>
													Dokter <?= $dokter['SPESIALISASI']; ?>
												</span>
											</td>
											<td>
												<?php
												foreach ($detail as $dt) :
													if ($dt['ID_DOKTER'] == $dokter['ID_DOKTER'] && $dt['ID_JADWAL'] == 1) :
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
													if ($dt['ID_DOKTER'] == $dokter['ID_DOKTER'] && $dt['ID_JADWAL'] == 2) :
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
													if ($dt['ID_DOKTER'] == $dokter['ID_DOKTER'] && $dt['ID_JADWAL'] == 3) :
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
													if ($dt['ID_DOKTER'] == $dokter['ID_DOKTER'] && $dt['ID_JADWAL'] == 4) :
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
													if ($dt['ID_DOKTER'] == $dokter['ID_DOKTER'] && $dt['ID_JADWAL'] == 5) :
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
									<?php
									endforeach; ?>
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