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
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Contact</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Patient Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Patient ID</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Disease</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Date Check In</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
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
										<th></th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<td>
											<img src="images/users/11.png" alt="" width="43">
										</td>
										<td><span class="text-nowrap">#P-00012</span></td>
										<td>Dr. Samantha</td>
										<td>Dentist</td>
										<td><span class="text-nowrap">+12 4124 5125</span></td>
										<td>
											<h5>
												<span class="badge badge-success">
													<i class="fa fa-circle text-primary mr-1"></i>
													Tersedia
												</span>
											</h5>
											<h5>
												<span class="badge badge-danger">
													<i class="fa fa-circle text-primary mr-1"></i>
													Tidak Tersedia
												</span>
											</h5>
										</td>
										<td>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
												Detail
											</button>
										</td>
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
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Detail Dokter</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="mb-3">
								<label for="id" class="form-label">ID Dokter</label>
								<input type="text" class="form-control" id="id" name="id" value="#P-00012" readonly>
							</div>
							<div class="mb-3">
								<label for="nama" class="form-label">Nama Dokter</label>
								<input type="text" class="form-control" id="nama" name="nama" value="Dr. Samantha" readonly>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>