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
									</tr>
								</thead>
								<tbody class="text-center">
									<?php foreach ($dokter as $Dokter) : ?>
										<tr>
											<td>
												<img src="assets/images/<?= $Dokter['PROFIL_DOKTER'] ?>" alt="" width="43">
											</td>
											<td><span class="text-nowrap"><?= $Dokter['ID_DOKTER']; ?></span></td>
											<td><?= $Dokter['NAMA_DOKTER']; ?></td>
											<td><?= $Dokter['SPESIALISASI']; ?></td>
											<td><span class="text-nowrap"><?= $Dokter['HP_DOKTER']; ?></span></td>
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