<?php
include "../connect.php";
$id_provinsi=$_GET['id_provinsi'];
$sql = "SELECT id_kabupaten, id_provinsi, nama_kabupaten
FROM public.kabupaten WHERE id_provinsi=$id_provinsi;";
$result = pg_query($sql);


$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);
	while ($isinya = pg_fetch_assoc($result)) {
		$features = array(
		'type' => 'Feature',
		'properties' => array(
        'id_kabupaten' => $isinya['id_kabupaten'],
        'id_provinsi' => $isinya['id_provinsi'],
        'nama_kabupaten' => $isinya['nama_kabupaten']
		)
	);
	array_push($hasil['features'], $features);
	}
	echo $data= json_encode($hasil);

	
?>