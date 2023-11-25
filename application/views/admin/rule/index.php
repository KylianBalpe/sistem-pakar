<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php"); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view("admin/_partials/navbar.php"); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view("admin/_partials/sidebar.php"); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0"><?php echo ucfirst($this->uri->segment(1)) ?></h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card elevation-1">
								<!-- /.card-header -->
								<div class="card-body">
									<?= ($this->session->flashdata('alert')); ?>
									<table id="example2" class="table table-bordered table-hover table-sm">
										<thead>
											<tr>
												<th class="text-center">No</th>
												<th class="text-center">Rule</th>
												<th>IF</th>
												<th class="text-center">THEN</th>
												<th class="text-center">Nilai CF</th>
												<!-- <th class="text-center">Action</th> -->
											</tr>
										</thead>
										<tbody>
											<?php
											if ($cekdata > 0) {
												$no = 1;
												foreach ($rule as $item) { ?>
													<tr>
														<td class="text-center"><?= $no++; ?></td>
														<td class="text-center"><?= $item->rule; ?></td>
														<td><?= $item->kode_ciri; ?></td>
														<td class="text-center"><?= $item->kode_kepribadian; ?></td>
														<td class="text-center"><?= $item->nilai_cf; ?></td>
														<!-- <td class="text-center">
                                                            <a href="<?= site_url('Kepribadian/getid/' . $item->id); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                            <a href="<?= site_url('Kepribadian/delete/' . $item->id); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Apakah anda yakin ingin menghapus <?= $item->rule; ?>?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td> -->
													</tr><?php }
													} else { ?>
												<tr>
													<td colspan="7" align="center">
														<h4>Data Kosong</h4>
													</td>
												</tr>
											<?php } ?>
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
		<footer class="main-footer">
			<?php $this->load->view("admin/_partials/footer.php"); ?>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<?php $this->load->view("admin/_partials/js.php"); ?>
</body>


</html>