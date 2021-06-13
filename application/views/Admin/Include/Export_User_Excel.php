<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data User RUAT.xls");
?>
<html>
	<head>
		<title>Export Data User</title>
	</head>

	<body>
		<h3>Data User RUAT</h3>
		<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>


		<tbody>
			<?php foreach($DATA as $arrData): ?>
				<tr>
					<td><?= $arrData["user_id"]; ?></td>
					<td><?= $arrData["nama_lengkap"]; ?></td>
					<td><?= $arrData["username"]; ?></td>
					<td><?= $this->encryption->decrypt($arrData["password"]); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
	</body>
</html>
