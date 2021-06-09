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
				<P>Dear <?= $nama_lengkap; ?>,</P>
				<p>Berikut adalah akses login anda untuk Rapat Umum Anggota Tahunan (RUAT)</p>
				<table border="0">
					<tr>
						<td>Username</td>
						<td><?= $username; ?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><?= $password; ?></td>
					</tr>
				</table>
				<p style="margin-bottom: 30px;">
					Silahkan klik tombol dibawah ini untuk login
				</p>
				<center>
					<a href="<?= base_url("Member/login"); ?>" style="padding: 20px; background-color:dodgerblue; text-decoration:none; color:#FFF;">Login Member</a>
				</center>
				<p style="margin-top: 30px;">
					atau silahkan copy-paste link berikut
				</p>
				<center>
					<p><?= base_url("Member/login"); ?></p>
				</center>
			</div>
		</div>
	</body>
</html>
