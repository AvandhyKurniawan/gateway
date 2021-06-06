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
 <!-- Top Bar Start -->
 <div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="index.html" class="logo">
        <span class="logo-light">
            <i class="mdi mdi-camera-control"></i> Stexo
        </span>
        <span class="logo-sm">
            <i class="mdi mdi-camera-control"></i>
        </span>
    </a>
</div>

<nav class="navbar-custom">
    <ul class="navbar-right list-inline float-right mb-0">
        
        <!-- language-->
       
        <!-- full screen -->
        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                <i class="mdi mdi-arrow-expand-all noti-icon"></i>
            </a>
        </li>

        <!-- notification -->
        <li class="dropdown notification-list list-inline-item">
            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="mdi mdi-bell-outline noti-icon"></i>
                <span class="badge badge-pill badge-danger noti-icon-badge"></span>
            </a>
          
        </li>

        <li class="dropdown notification-list list-inline-item">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?= base_url(); ?>/support/template//assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a class="dropdown-item text-danger" href="<?= site_url("/"); ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
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
                                <a href="<?= site_url("Admin/Dashboard"); ?>" class="waves-effect">
                                    <i class="fas fa-file-alt"></i><span>Kandidat</span>
                                </a>
                            </li>
							
							<li>
                                <a href="<?= site_url("Admin/Dashboard/rejected");?>" class="waves-effect">
                                    <i class="fas fa-file-alt"></i><span>Data Rejected</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url("Admin/Dashboard/acc"); ?>" class="waves-effect">
                                    <i class="fas fa-file-alt"></i><span>Approved</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url("Admin/Dashboard/akun"); ?>" class="waves-effect">
                                    <i class="fas fa-file-alt"></i><span>Akses Data User</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>

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
                                            <tr>
                                            <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>0A-02001-Tiger</td>
                                                <td>KDJ321</td>
                                        
                                            </tr>
                                            <tr>
                                            <td>2</td>
                                                <td>Garrett Winters</td>
                                                <td>0A-02002-Garet</td>
                                                <td>KDJ322</td>
                                                
                                            </tr>
                                      
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
