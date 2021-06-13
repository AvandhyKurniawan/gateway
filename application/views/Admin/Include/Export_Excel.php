<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Peserta RUAT ($STATUS).xls");
?>
<html>
	<head>
		<title>Export Data</title>
	</head>

	<body>
		<h3>Data Peserta RUAT (<?= $STATUS; ?>)</h3>
		<table border="1">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Unit</th>
					<th>Status</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Email</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($DATA as $arrData): ?>
					<tr>
						<td><?= $arrData["nama_lengkap"]; ?></td>
						<td><?= (strlen($arrData["nama_tower"]) <= 1 ? "0".$arrData["nama_tower"] : $arrData["nama_tower"])."-".$arrData["no_lantai"]."-".$arrData["nama_unit"]; ?></td>
						<td><?= $arrData["status_peserta"]; ?></td>
						<td><?= $arrData["domisili"]; ?></td>
						<td><?= $arrData["tlp"]; ?></td>
						<td><?= $arrData["email"]; ?></td>
					</tr>
					<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>
