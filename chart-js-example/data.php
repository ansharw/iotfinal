<?php
/**
 * Misalkan data list suhu dari database.
 *
 * Tampil 10 data terakhir (urutkan berdasarkan tanggal)
 */
$data = [
	[
		'date' => '2021-09-20',
		'temp' => rand(20, 30)
	],
	[
		'date' => '2021-09-21',
		'temp' => rand(20, 30)
	],
	[
		'date' => '2021-09-22',
		'temp' => rand(20, 30)
	],
	[
		'date' => '2021-09-23',
		'temp' => rand(20, 30)

	],
	[
		'date' => '2021-09-24',
		'temp' => rand(20, 30)

	],
];

/**
 * Tampilkan data dalam JSON
 */
header('Content-Type: application/json');
echo json_encode($data);
