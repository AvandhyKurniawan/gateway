<html>
	<head>
		<title>Email</title>
	</head>
	<body>
		<div style="width: 500px;">
			<div style="display: inline-flex;">
				<img src="<?= base_url("support/template/assets/images/Logo.png"); ?>" alt="">
				<h2 style="margin-left: 20px;">Akses Login Rapat Umum Anggota Tahunan</h2>
			</div>
			<div>
				<P>Kepada Yth. Bapak / Ibu <?= $nama_lengkap; ?>,</P>
				
				<p>Selamat, pendaftaran anda sebagai peserta RUAT Apartement Gateway Pesanggarahan, <b>Telah disetujui</b>.</p>
				
				<p>Dibawah ini adalah akses login anda untuk masuk kedalam RUAT Online.</p>
				
				<table border="0">
					<tr>
						<td>Username</td>
						<td> : <?= $username; ?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td> : <?= $password; ?></td>
					</tr>
				</table>
				<br>
				<p>CATATAN : Nama "<b><?= $username; ?></b>", Wajib digunakan sebagai nama profil/akun zoom anda</p>
				<p style="margin-bottom: 30px;">
					Silahkan klik tombol dibawah ini untuk Masuk/Login :
				</p>
				<center>
					<a href="<?= base_url("Member/login"); ?>" style="padding: 20px; background-color:dodgerblue; text-decoration:none; color:#FFF;">Masuk / Login</a>
				</center>
				<p style="margin-top: 30px;">
					atau silahkan klik link dibawah ini, jika tidak berhasil lakukan copy-paste link berikut :
				</p>
				<center>
					<p><?= base_url("Member/login"); ?></p>
					
				</center>
				<br>
					<p>Terima kasih,</p>
					<p>Admin RUAT</p>
			</div>
		</div>
	</body>
</html>
