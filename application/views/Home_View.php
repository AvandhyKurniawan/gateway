<html>
	<head>
	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Beranda | Gateway Apartment</title>
        <link rel="shortcut icon" href="<?= base_url("support/template/assets/images/Logo.png"); ?>">

        <link href="<?= base_url("support/template/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/metismenu.min.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/icons.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/style.css"); ?>" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Begin page -->
        <div class="accountbg"></div>
		<div class="container-fluid">
			<div class="col-md-2 col-sm-12 col-xs-12">
				<img src="<?= base_url("support/template/assets/images/Logo.png"); ?>" class="thumb-lg img-thumbnail mx-auto d-block img-fluid" alt="thumbnail">
			</div>
			<div class="wrapper-page">
				<div class="card card-pages shadow-none">
					<div class="card-body">
						<!-- <div class="user-thumb text-center m-b-30">
							<img src="<?= base_url("support/template/assets/images/Logo.png"); ?>" class="thumb-lg img-thumbnail mx-auto d-block img-fluid" alt="thumbnail">
						</div> -->
						<div class="row">
							<div class="col-12">
								<center>
									<label class="text-center">Apartement Gateway Pesanggahan</label>
								</center>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<h4 class="text-center">Rapat Umum Anggota Tahunan Tahun <?= date('Y'); ?></h4>
							</div>
						</div>

						<div class="form-group text-center m-t-20">
							<div class="col-12">
								<a class="btn btn-primary btn-block btn-lg waves-effect waves-light" href="<?= base_url("Member/register"); ?>">Pendaftaran</a>
							</div>
							<br>
							<div class="col-12">
								<a class="btn btn-primary btn-block btn-lg waves-effect waves-light" href="<?= base_url("Member/login"); ?>">Masuk / Login</a>
							</div>
							<br>
							<div class="col-12">
								<button class="btn btn-info btn-block btn-lg waves-effect waves-light" data-toggle="modal" data-target="#myModal">Informasi</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- END wrapper -->
		</div>

		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-0" id="myModalLabel">Informasi Rapat </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="font-16">Overflowing text to show scroll behavior</h5>
						<p>Cras mattis consectetur purus sit amet fermentum.
							Cras justo odio, dapibus ac facilisis in,
							egestas eget quam. Morbi leo risus, porta ac
							consectetur ac, vestibulum at eros.</p>
						<p>Praesent commodo cursus magna, vel scelerisque
							nisl consectetur et. Vivamus sagittis lacus vel
							augue laoreet rutrum faucibus dolor auctor.</p>
						<p>Aenean lacinia bibendum nulla sed consectetur.
							Praesent commodo cursus magna, vel scelerisque
							nisl consectetur et. Donec sed odio dui. Donec
							ullamcorper nulla non metus auctor
							fringilla.</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>

					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

        <!-- jQuery  -->
        <script src="<?= base_url("support/template/assets/js/jquery.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/bootstrap.bundle.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/metismenu.min.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/jquery.slimscroll.js"); ?>"></script>
        <script src="<?= base_url("support/template/assets/js/waves.min.js"); ?>"></script>

        <!-- App js -->
        <script src="<?= base_url("support/template/assets/js/app.js"); ?>"></script>
	</body>
</html>
