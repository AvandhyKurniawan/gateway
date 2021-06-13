<html>
	<head>
	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login | Apartment Gateway</title>
        <link rel="shortcut icon" href="<?= base_url("support/template/assets/images/Logo.png"); ?>">

        <link href="<?= base_url("support/template/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/metismenu.min.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/icons.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url("support/template/assets/css/style.css"); ?>" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Begin page -->
        <div class="accountbg"></div>
       
        <div class="wrapper-page">
			<div class="card card-pages shadow-none">
				<div class="card-body">
					<div class="user-thumb text-center m-b-30">
						<img src="<?= base_url("support/template/assets/images/Logo.png"); ?>" class="thumb-lg img-thumbnail mx-auto d-block img-fluid" alt="thumbnail">
					</div>
					<h5 class="font-18 text-center"><?= $TITLE; ?></h5>

					<form class="form-horizontal m-t-30" action="index.html">

						<div class="form-group">
							<div class="col-12">
									<label>Username</label>
								<input class="form-control" type="text" required="" placeholder="Username">
							</div>
						</div>

						<div class="form-group">
							<div class="col-12">
									<label>Password</label>
								<input class="form-control" type="password" required="" placeholder="Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-12">
								<div class="checkbox checkbox-primary">
										<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label" for="customCheck1"> Remember me</label>
												</div>
								</div>
							</div>
						</div>

						<div class="form-group text-center m-t-20">
							<div class="col-12">
								<a class="btn btn-primary btn-block btn-lg waves-effect waves-light" href="<?= base_url("Admin/Dashboard"); ?>">Log In</a>
							</div>
							
						</div>
					</form>
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
