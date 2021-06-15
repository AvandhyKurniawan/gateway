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
        <div class="home-btn d-none d-sm-block">
            <a href="<?= base_url("/"); ?>" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="wrapper-page">
			<div class="card card-pages shadow-none">
				<div class="card-body">
					<div class="user-thumb text-center m-b-30">
						<img src="<?= base_url("support/template/assets/images/Logo.png"); ?>" class="thumb-lg img-thumbnail mx-auto d-block img-fluid" alt="thumbnail">
					</div>
					<h5 class="font-18 text-center"><?= $TITLE; ?></h5>

					<form class="form-horizontal m-t-30" action="<?= $ACTION ?>" method="POST">

						<div class="form-group">
							<div class="col-12">
									<label>Username</label>
								<input class="form-control" type="text" name="txtUsername" required="" placeholder="Username">
							</div>
						</div>

						<div class="form-group">
							<div class="col-12">
									<label>Password</label>
								<input class="form-control" type="password" name="txtPassword" required="" placeholder="Password">
							</div>
						</div>

						<div class="form-group text-center m-t-20">
							<div class="col-12">
								<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In / Masuk</button>
							</div>
							
						</div>
						
							
						</div>
					</form>
					
						<div class="form-group text-center m-t-20">
							<div class="col-12">
								<a type="button" href="<?= base_url('/') ?>" class="btn btn-success" >Kembali</a>
							</div>
								</div>
					
					
					
					<?php
						if(!empty($this->session->flashdata("error_login"))):
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= $this->session->flashdata("error_login") ?>
                    </div>
					<?php endif; ?>
				</div>
			</div>
        </div>
        <!-- END wrapper -->


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
