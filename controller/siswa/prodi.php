<?php
include "../connect.php";
$id_politeknik=$_GET['id_politeknik'];
$sql = "SELECT id_prodi, id_politeknik, nama_prodi
FROM public.prodi WHERE id_politeknik=$id_politeknik;";
$result = pg_query($sql);


$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);
	while ($isinya = pg_fetch_assoc($result)) {
		$features = array(
		'type' => 'Feature',
		'properties' => array(
        'id_prodi' => $isinya['id_prodi'],
        'nama_prodi' => $isinya['nama_prodi']
		)
	);
	array_push($hasil['features'], $features);
	}
	echo $data= json_encode($hasil);

	
?>