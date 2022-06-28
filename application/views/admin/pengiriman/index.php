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
												<a href="#" class="btn btn-primary">
													Detail
												</a>
											</td>
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