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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	</head>

	<body>
		<!-- Begin page -->
		<div id="wrapper">
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
									<h4 class="page-title">Daftar Peserta Yang sudah di Approved</h4>
								</div>
								<div class="col-sm-6">
									<ol class="breadcrumb float-right">
									<li class="breadcrumb-item"><a href="<?= base_url("Admin/Dashboard"); ?>">Dashboard</a></li>
										<li class="breadcrumb-item active">Data Approved</li>
									</ol>
								</div>
							</div> <!-- end row -->
						</div>
						<!-- end page-title -->

						<div class="row">
							<div class="col-12">
								<div class="card m-b-30">
									<div class="card-body">
										<div class="form-group float-right">
											<a href="<?= base_url('Admin/Dashboard/export_data/recepted'); ?>" class="btn btn-md btn-success">Export Data</a>
										</div>
										<div class="table-responsive">
											<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
												<thead>
													<tr>
														<th>Nama</th>
														<th>Unit</th>
														<th>Status</th>
														<th>Alamat</th>
														<th>Telepon</th>
														<th>Email</th>
														<th>Lampiran</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													<?php foreach($ACCEPTED_DATA as $arrData): ?>
														<tr>
															<td><?= $arrData["nama_lengkap"]; ?></td>
															<td><?= (strlen($arrData["nama_tower"]) <= 1 ? "0".$arrData["nama_tower"] : $arrData["nama_tower"])."-".$arrData["no_lantai"]."-".$arrData["nama_unit"]; ?></td>
															<td><?= $arrData["status_peserta"]; ?></td>
															<td><?= $arrData["domisili"]; ?></td>
															<td><?= $arrData["tlp"]; ?></td>
															<td><?= $arrData["email"]; ?></td>
															<td>
																<a class="btn btn-md btn-primary" href="<?= base_url("support/assets/upload/users/$arrData[foto_ktp]"); ?>">Foto KTP</a>
																<a class="btn btn-md btn-primary" href="<?= base_url("support/assets/upload/users/$arrData[foto_diri]"); ?>">Foto Diri</a>
																<?php if(!empty($arrData["foto_kuasa"])): ?>
																	<a class="btn btn-md btn-primary" href="<?= base_url("support/assets/upload/users/$arrData[foto_kuasa]"); ?>">Surat Kuasa</a>
																<?php endif; ?>
															</td>
															<td>
																<button class="btn btn-md btn-success" onclick='action("<?= md5($arrData["peserta_id"]); ?>")'>Approved</button>
															</td>
														</tr>
														<?php endforeach; ?>
												</tbody>
											</table>
										</div>
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
		</div>

		<div id="action" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-0" id="myModalLabel">Action</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<button type="button" class="btn btn-warning btn-block waves-effect" id="btnHold"> <i class="fas fa-clock"></i> Hold</button>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn btn-danger btn-block waves-effect" id="btnReject"> <i class="fas fa-minus"></i> Reject</button>
							</div>
						</div>
					</div>
					<div class="modal-footer">
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url("support/template/assets/pages/datatables.init.js");?>"></script>  

        <!-- App js -->
        <script src="<?= base_url("support/template/assets/js/app.js"); ?>"></script>

		<script>
			function action(param){
				$("#action").modal("show");
				$("#btnHold").attr("onclick","hold('"+param+"')");
				$("#btnReject").attr("onclick","reject('"+param+"')");
			}

			function hold(param){
				$.ajax({
					type : "POST",
					url : "<?= base_url('Admin/Dashboard/doUpdateStatus'); ?>",
					dataType : "JSON",
					data : {
						code : param,
						status : "hold"
					},
					beforeSend : function(){
						$("#btnHold").html('<i class="fas fa-spinner fa-spin"></i> Mohon Tunggu');
					},
					success : function(response){
						$("#btnHold").html('<i class="fas fa-clock"></i> Hold');
						$.alert({
								theme: 'material',
								type: 'blue',
								icon: 'fas fa-check',
								title: response.status,
								content: response.message,
								buttons:{
									ok:{
										action:function(){
											location.reload();
										}
									}
								}
							});
					},
					error : function(response){
						$("#btnHold").html('<i class="fas fa-clock"></i> Hold');
						$.alert({
								theme: 'material',
								type: 'red',
								icon: 'fas fa-remove',
								title: response.responseJSON.status,
								content: response.responseJSON.message,
								buttons:{
									ok:{
										action:function(){
											location.reload();
										}
									}
								}
							});
					}
				});
			}

			function reject(param){
				$.ajax({
					type : "POST",
					url : "<?= base_url('Admin/Dashboard/doUpdateStatus'); ?>",
					dataType : "JSON",
					data : {
						code : param,
						status : "rejected"
					},
					beforeSend : function(){
						$("#btnReject").html('<i class="fas fa-spinner fa-spin"></i> Mohon Tunggu');
					},
					success : function(response){
						$("#btnReject").html('<i class="fas fa-minus"></i> Reject');
						$.alert({
								theme: 'material',
								type: 'blue',
								icon: 'fas fa-check',
								title: response.status,
								content: response.message,
								buttons:{
									ok:{
										action:function(){
											location.reload();
										}
									}
								}
							});
					},
					error : function(response){
						$("#btnReject").html('<i class="fas fa-minus"></i> Reject');
						$.alert({
								theme: 'material',
								type: 'red',
								icon: 'fas fa-remove',
								title: response.responseJSON.status,
								content: response.responseJSON.message,
								buttons:{
									ok:{
										action:function(){
											location.reload();
										}
									}
								}
							});
					}
				});
			}
		</script>
	</body>
</html>
