<?php

	$data = [
		[
			'nama_aset' => 'Kursi Kantor',
			'kuantitas' => '12',
			'harga' => 'Rp 100.000',
			'tgl_pembelian' => '04-08-2020',
			'penanggung_jawab' => 'Ahmad Saugi',
			'nama_pemeriksa' => 'Rizal Kadamong',
			'tgl_diperiksa' => '30-09-2020',
			'catatan' => 'Kursi kantor warna hitam'
		],
		[
			'nama_aset' => 'Meja',
			'kuantitas' => '12',
			'harga' => 'Rp 100.000',
			'tgl_pembelian' => '04-08-2020',
			'penanggung_jawab' => 'Ahmad Saugi',
			'nama_pemeriksa' => 'Rizal Kadamong',
			'tgl_diperiksa' => '30-09-2020',
			'catatan' => 'Kursi kantor warna hitam'
		],
	];

	echo '<pre>';
	print_r($data);
	echo '</pre>';

	echo '<hr>';
	echo '<br>';

?>

<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Aset</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;

				foreach($data as $d) {
			?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $d['nama_aset'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>