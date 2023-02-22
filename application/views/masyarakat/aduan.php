<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Pengaduan Nonvalid</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Home</a></li>
						<li class="breadcrumb-item active">Nonvalid</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>


	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- /.card -->

					<div class="card">
						<!-- /.card-header -->
						<div class="card-body">

                            <div class="form-group">
                                <label>Foto Laporan</label>

                                <div class="input-group">
                                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                    <i class="far fa-file-alt"></i> Pilih Foto
                                    <i class="fas fa-caret-down"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Isi Aduan</label>
                                <textarea class="form-control" rows="3" placeholder="Aduan Anda ..."></textarea>
                            </div>
                            <div>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-block btn-success">Adukan</button>
                                    </td>
                                </tr>
                            </div>
                            <br>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Pengadu</th>
										<th>Tanggal Aduan</th>
										<th>Foto Laporan</th>
										<th>Isi Aduan</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td>1</td>
										<td>Irfan  Fauziah</td>
										<td>09-10-2023</td>
										<td>Ini Foto</td>
										<td>Wifinya lag</td>
										<td>Belum valid</td>
										
									</tr>

								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

