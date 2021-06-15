<html>
	<head>
	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard | Apartment Gateway</title>
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
            <!-- Top Bar Start -->
            <div class="topbar">
				<!-- LOGO -->
				<div class="topbar-left">
    				<a href="<?= base_url("Member/Dashboard_member"); ?>" class="logo">
        				<span class="logo-light">
            				<i class="mdi mdi-camera-control"></i> RUAT
        				</span>
        				<span class="logo-sm">
            				<i class="mdi mdi-camera-control"></i>
        				</span>
    				</a>
				</div>

				<nav class="navbar-custom">
					<ul class="navbar-right list-inline float-right mb-0">
						<!-- full screen -->
						<li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
							<a class="nav-link waves-effect" href="#" id="btn-fullscreen">
								<i class="mdi mdi-arrow-expand-all noti-icon"></i>
							</a>
						</li>

						<li class="dropdown notification-list list-inline-item">
							<div class="dropdown notification-list nav-pro-img">
								<a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
									<img src="<?= base_url("support/template/assets/images/users/user-4.jpg"); ?>" alt="user" class="rounded-circle">
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
								
									<a class="dropdown-item text-danger" href="<?= base_url("Member/Dashboard_member/doLogout"); ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
								</div>
							</div>
						</li>
					</ul>
					<ul class="list-inline menu-left mb-0">
						<li class="float-left">
							<button class="button-menu-mobile open-left waves-effect">
								<i class="mdi mdi-menu"></i>
							</button>
						</li>
					</ul>
				</nav>
			</div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="<?= base_url("Member/Dashboard_member"); ?>" class="waves-effect">
                                    <i class="fas fa-file-alt"></i><span>Peserta</span>
                                </a>
                                
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

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
                                    <h4 class="page-title">SELAMAT DATANG</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Peserta</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">

                            <div class="col-xl">
                             
                                    <div class="card-body">
        
                                
        
                                        <div class="button-items">
                                            <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#agendarapat">Jadwal</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#tatatertibruat">Agenda</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#contoh3">Materi Ruat</button>
                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#contoh4">Contoh 4</button> -->
                                        </div>
										<br>
										<div class="button-items">
                                            <button type="button" class="btn btn-info waves-effect waves-light">Download Jadwal</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light">Download Agenda</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light">DownloadMateri Ruat</button>
                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#contoh4">Contoh 4</button> -->

                                        </div>


                                  <br>
            
                                            <h4 class="mt-0 header-title">Dibawah adalah tombol masuk rapat online</h4>
                                               
                                               
                                            
                                            </p>
            
                                            <div >
                                                <a type="vurron" 
												href="https://us02web.zoom.us/j/9018164204?pwd=UkNUQ2FsTUpmT0t1OVlrcWlMRGxTdz09"
												 class="btn btn-success waves-effect waves-light" data-toggle="button" aria-pressed="false">
                                                    Masuk Rapat
                                                </a>
                                            </div>
                                    
                                    </div>
                               
                            </div>


                        </div> <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- content -->
                <footer class="footer">
                    © 2021 - 2022 Apartment Gateway.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <div id="agendarapat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-0" id="myModalLabel">Agenda Rapat</h5>
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
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
						
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="tatatertibruat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-0" id="myModalLabel">Tata Tertib Ruat</h5>
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
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
						
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="contoh3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-0" id="myModalLabel">Contoh 3</h5>
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
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
						
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="contoh4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-0" id="myModalLabel">Contoh 4</h5>
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
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
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

		<script>
			$(function(){
				$("#tatatertibruat").modal("show");
			});
		</script>
	</body>
</html>
