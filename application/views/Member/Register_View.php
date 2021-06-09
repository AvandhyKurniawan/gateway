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
		<link href="<?= base_url("support/template/plugins/icheck-material/icheck-material.min.css"); ?>" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	</head>

	<body>
		<!-- Begin page -->
        <div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="card card-pages shadow-none">
						<div class="card-body">
						<div class="user-thumb text-center">
							<img src="<?= base_url("support/template/assets/images/Logo.png"); ?>" class="thumb-lg img-thumbnail mx-auto d-block img-fluid" alt="thumbnail">
						</div>
							<h5 class="font-18 text-center">Pendaftaran Peserta RUAT</h5>

							<form id="formRegister">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>NAMA</label>
											<input class="form-control" type="text" id="txtNamaLengkap" name="txtNamaLengkap" placeholder="Nama Lengkap" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>UNIT</label>
											<div class="row">
												<div class="col-4">
													<select name="cmbTower" id="cmbTower" class="form-control" required>
														<option value="">TOWER</option>
														<?php foreach($TOWER as $arrDataTower): ?>
															<option value="<?= $arrDataTower["tower_id"]; ?>"><?= $arrDataTower["nama_tower"]; ?></option>
														<?php endforeach; ?>
													</select>
												</div>
												<div class="col-4">
													<select name="cmbLantai" id="cmbLantai" class="form-control" required>
														<option value="">LANTAI</option>
														<?php foreach($LANTAI as $arrDataLantai): ?>
															<option value="<?= $arrDataLantai["lantai_id"]; ?>"><?= $arrDataLantai["no_lantai"]; ?></option>
														<?php endforeach; ?>
													</select>
												</div>
												<div class="col-4">
													<select name="cmbNomor" id="cmbNomor" class="form-control" required>
														<option value="">NOMOR</option>
														<?php foreach($UNIT as $arrDataUnit): ?>
															<option value="<?= $arrDataUnit["unit_id"]; ?>"><?= $arrDataUnit["nama_unit"]; ?></option>
														<?php endforeach; ?>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>STATUS</label>
											<select name="cmbStatus" id="cmbStatus" class="form-control" onchange="changeStatus();" required>
												<option value="">STATUS</option>
												<option value="Pemilik">PEMILIK</option>
												<option value="Penyewa">PENYEWA</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>DOMISILI</label>
											<input class="form-control" type="text" id="txtDomisili" name="txtDomisili" placeholder="Domisili" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>ALAMAT KTP</label>
											<input class="form-control" type="text" id="txtAlamat" name="txtAlamat" placeholder="Alamat Sesuai KTP" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>NO HP</label>
											<input class="form-control" type="text" id="txtNoHp" name="txtNoHp" placeholder="Nomor Handphone" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>EMAIL</label>
											<input class="form-control" type="text" id="txtEmail" name="txtEmail" placeholder="Email" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group" id="lampiranDokumen"></div>
									</div>
								</div>
								<input type="submit" id="submit" style="display: none;">
							</form>
	
							<div class="row justify-content-center">
								<div class="col-md-6 col-sm-12">
									<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" id="btnDaftar" onclick="saveData();">Daftar</button>
								</div>
							</div>

						</div>
					</div>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url("support/template/assets/js/app.js"); ?>"></script>

		<script>
			$(function(){
				$("#lampiranDokumen").empty();
			});

			function changeStatus(){
				var status = $("#cmbStatus").val();
				if(status == "Pemilik"){
					$("#lampiranDokumen").html(
						'<div class="row">'+
							'<div class="col-12">'+
								'<div class="form-group">'+
									'<label for="fileKtpPemilik">KTP</label>'+
									'<input type="file" name="fileKtpPemilik" id="fileKtpPemilik" class="form-control" required>'+
								'</div>'+
								'<div class="form-group">'+
									'<label for="fileFotoDiriPemilik">FOTO DIRI</label>'+
									'<input type="file" name="fileFotoDiriPemilik" id="fileFotoDiriPemilik" class="form-control" required>'+
								'</div>'+
							'</div>'+
						'</div>'
					);
				}else if(status == "Penyewa"){
					$("#lampiranDokumen").html(
						'<div class="row">'+
							'<div class="col-12">'+
								'<div class="form-group">'+
									'<label for="fileKtpWakil">KTP</label>'+
									'<input type="file" name="fileKtpWakil" id="fileKtpWakil" class="form-control" required>'+
								'</div>'+
								'<div class="form-group">'+
									'<label for="fileFotoDiriWakil">FOTO DIRI</label>'+
									'<input type="file" name="fileFotoDiriWakil" id="fileFotoDiriWakil" class="form-control" required>'+
								'</div>'+
								'<div class="form-group">'+
									'<label for="fileSuratKuasa">SURAT KUASA</label>'+
									'<input type="file" name="fileSuratKuasa" id="fileSuratKuasa" class="form-control" required>'+
								'</div>'+
							'</div>'+
						'</div>'
					);
				}else{
					$("#lampiranDokumen").empty();
				}
			}
			
			function saveData(){
				if($("#formRegister")[0].checkValidity()){
					var FORM_DATA = new FormData();
	
					var NamaLengkap 			= $("#txtNamaLengkap").val();
					var Tower 					= $("#cmbTower").val();
					var Lantai 					= $("#cmbLantai").val();
					var Nomor 					= $("#cmbNomor").val();
					var Status 					= $("#cmbStatus").val();
					var Domisili 				= $("#txtDomisili").val();
					var Alamat 					= $("#txtAlamat").val();
					var NoHp 					= $("#txtNoHp").val();
					var Email 					= $("#txtEmail").val();
	
					FORM_DATA.append("NamaLengkap",NamaLengkap);
					FORM_DATA.append("Tower",Tower);
					FORM_DATA.append("Lantai",Lantai);
					FORM_DATA.append("Nomor",Nomor);
					FORM_DATA.append("Status",Status);
					FORM_DATA.append("Domisili",Domisili);
					FORM_DATA.append("Alamat",Alamat);
					FORM_DATA.append("NoHp",NoHp);
					FORM_DATA.append("Email",Email);
					
					if(Status == "Pemilik"){
						var KtpPemilik 				= $("#fileKtpPemilik").val();
						var FotoDiriPemilik 		= $("#fileFotoDiriPemilik").val();
						var fileKtpPemilik			= $("#fileKtpPemilik")[0].files;
						var fileFotoDiriPemilik		= $("#fileFotoDiriPemilik")[0].files;
	
						FORM_DATA.append("KtpPemilik",KtpPemilik);
						FORM_DATA.append("FotoDiriPemilik",FotoDiriPemilik);
						FORM_DATA.append("fileKtpPemilik",fileKtpPemilik[0]);
						FORM_DATA.append("fileFotoDiriPemilik",fileFotoDiriPemilik[0]);
					}else if(Status == "Penyewa"){
						var KtpWakil 				= $("#fileKtpWakil").val();
						var FotoDiriWakil 			= $("#fileFotoDiriWakil").val();
						var SuratKuasa 				= $("#fileSuratKuasa").val();
						
						var fileKtpWakil			= $("#fileKtpWakil")[0].files;
						var fileFotoDiriWakil		= $("#fileFotoDiriWakil")[0].files;
						var fileSuratKuasa			= $("#fileSuratKuasa")[0].files;
	
						FORM_DATA.append("KtpWakil",KtpWakil);
						FORM_DATA.append("FotoDiriWakil",FotoDiriWakil);
						FORM_DATA.append("SuratKuasa",SuratKuasa);
						FORM_DATA.append("fileKtpWakil",fileKtpWakil[0]);
						FORM_DATA.append("fileFotoDiriWakil",fileFotoDiriWakil[0]);
						FORM_DATA.append("fileSuratKuasa",fileSuratKuasa[0]);
					}
	
	
					$.ajax({
						type : "POST",
						url : "<?= base_url("Member/Register/saveData"); ?>",
						dataType : "JSON",
						data : FORM_DATA,
						contentType: false,
						processData : false,
						beforeSend : function(){
							$("#btnDaftar").html(' <i class="fas fa-spinner fa-spin"></i> Mohon Tunggu');
						},
						success : function(response){
							$("#btnDaftar").html("Daftar");
							$.alert({
								theme: 'material',
								type: 'blue',
								icon: 'fas fa-check',
								title: response.status,
								content: response.message,
								buttons:{
									ok:{
										action:function(){
											window.location.href = "<?= base_url(); ?>";
										}
									}
								}
							});
							
						},
						error : function(response, xhr, param){
							$("#btnDaftar").html("Daftar");
							$.alert({
								theme: 'material',
								type: 'red',
								icon: 'fas fa-remove',
								title: response.responseJSON.status,
								content: response.responseJSON.message,
								buttons:{
									ok:{
										action:function(){
											window.location.href = "<?= base_url(); ?>";
										}
									}
								}
							});
						}
					});
				}else{
					$("#submit").click();
				}
			}
		</script>
	</body>
</html>
