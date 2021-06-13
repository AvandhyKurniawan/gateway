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
                                    <h4 class="page-title">Jumlah Peserta</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-account-multiple bg-primary text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Total Users</h5>
                                        </div>
                                        <h3 class="mt-4"><?= $SUMMARY_DATA["data"]["USERS"]; ?></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-account-check bg-success text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Total Accepted</h5>
                                        </div>
                                        <h3 class="mt-4"><?= $SUMMARY_DATA["data"]["RECEPTED"]; ?></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-account-clock bg-warning text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Total Hold</h5>
                                        </div>
                                        <h3 class="mt-4"><?= $SUMMARY_DATA["data"]["HOLD"]; ?></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-account-remove bg-danger text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Total Rejected</h5>
                                        </div>
                                        <h3 class="mt-4"><?= $SUMMARY_DATA["data"]["REJECTED"]; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
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
