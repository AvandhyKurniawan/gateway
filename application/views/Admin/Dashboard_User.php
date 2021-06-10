<html>
	<head>
	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Beranda | Gateway Apartment</title>
        <link rel="shortcut icon" href="<?= base_url("support/template/assets/images/Logo.png"); ?>">

		<!-- DataTables -->
        <link href="<?= base_url("support/template/plugins/datatables/dataTables.bootstrap4.min.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url("support/template/plugins/datatables/buttons.bootstrap4.min.css"); ?>" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?= base_url("support/template/plugins/datatables/responsive.bootstrap4.min.css"); ?>" rel="stylesheet" type="text/css" />

        <link href="<?= base_url("support/template/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/metismenu.min.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/icons.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/style.css"); ?>" rel="stylesheet" type="text/css">
		<link href="<?= base_url("support/template/plugins/icheck-material/icheck-material.min.css"); ?>" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Begin page -->
		<?php $this->load->view("Admin/Include/Topbar_View.php"); ?>
		<?php $this->load->view("Admin/Include/Sidebar_View.php"); ?>

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">
					<div class="page-title-box">
						<div class="row align-items-center">
							<div class="col-sm-6">
								<h4 class="page-title">Daftar Akun</h4>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
									<li class="breadcrumb-item active">Data Table</li>
								</ol>
							</div>
						</div> <!-- end row -->
					</div>
					<!-- end page-title -->

					<div class="row">
						<div class="col-12">
							<div class="card m-b-30">
								<div class="card-body">
	
									
	
									<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Username</th>
												<th>Password</th>
											</tr>
										</thead>
	
	
										<tbody>
											<?php foreach($USERS_DATA as $arrData): ?>
												<tr>
													<td><?= $arrData["user_id"]; ?></td>
													<td><?= $arrData["nama_lengkap"]; ?></td>
													<td><?= $arrData["username"]; ?></td>
													<td><?= $this->encryption->decrypt($arrData["password"]); ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
	
								</div>
							</div>
						</div> <!-- end col -->
					</div> <!-- end row -->




				</div>
				<!-- container-fluid -->
			</div>
			<!-- content -->
			<footer class="footer">
				© 2021 - 2022 Gateway Apartment.
			</footer>

		</div>
		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="<?= base_url("support/template/assets/js/jquery.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/bootstrap.bundle.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/metismenu.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/jquery.slimscroll.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/waves.min.js"); ?>"></script>

		<!-- Required datatable js -->
		<script src="<?= base_url("support/template/plugins/datatables/jquery.dataTables.min.js"); ?>"></script>
		 <script src="<?= base_url("support/template/plugins/datatables/dataTables.bootstrap4.min.js"); ?>"></script>
		 <!-- Buttons examples -->
		 <script src="<?= base_url("support/template/plugins/datatables/dataTables.buttons.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/buttons.bootstrap4.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/jszip.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/pdfmake.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/vfs_fonts.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/buttons.html5.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/buttons.print.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/buttons.colVis.min.js"); ?>"></script>
        <!-- Responsive examples -->
        <script src="<?= base_url("support/template/plugins/datatables/dataTables.responsive.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/plugins/datatables/responsive.bootstrap4.min.js"); ?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url("support/template/assets/pages/datatables.init.js");?>"></script>  

        <!-- App js -->
        <script src="<?= base_url("support/template/assets/js/app.js"); ?>"></script>
	</body>
</html>
