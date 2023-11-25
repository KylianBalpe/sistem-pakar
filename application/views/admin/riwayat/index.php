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
								<div class="card-body">
									<?= ($this->session->flashdata('alert')); ?>
									<table id="example2" class="table table-bordered table-hover table-sm">
										<thead>
											<tr>
												<th class="text-center">No</th>
												<th>Tanggal</th>
												<th class="text-center">Kode Kepribadian</th>
												<th class="text-center">Tipe Kepribadian</th>
												<th class="text-center">Nilai</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if ($cekdata > 0) {
												$no = 1;
												foreach ($riwayat as $item) { ?>
													<tr>
														<td class="text-center"><?= $no++ ?></td>
														<td><?= $item->tanggal ?></td>
														<?php if ($item->nilai != 0) : ?>

															<td class="text-center"><?= $item->kode_kepribadian ?></td>
															<td class="text-center"><?= $item->tipe_kepribadian ?></td>
														<?php else : ?>
															<td class="text-center text-muted font-italic"> - </td>
															<td class="text-center text-muted font-italic">Tidak diketahui karena hasil nilainya 0</td>
														<?php endif; ?>
														<td class="text-center"><?= $item->nilai ?></td>
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