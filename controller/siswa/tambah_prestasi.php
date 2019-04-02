<?php
session_start();

include "../connect.php";

$nama_prestasi=$_GET['prestasi'];
$jenis_prestasi=$_GET['jenis'];
$skala=$_GET['skala'];
$peringkat=$_GET['peringkat'];
$tahun_prestasi=$_GET['tahun'];
$username=$_SESSION['username'];

$result = pg_query($conn,"SELECT nisn, thn_pendaftaran, id_status_bm, kode_jurusan, username, npsn, id_jk, id_kabupaten, id_agama, nama, asal_jurusan, akselerasi, ttl, alamat, no_pendaftaran
FROM public.biodata WHERE username='$username';");
//  $rows = pg_num_rows($result);

while ($row=pg_fetch_assoc($result)) {
$nisn=$row['nisn'];
$tahun_pendaftaran=$row['thn_pendaftaran'];

}
// $getdate=getdate();
// $tahun=$getdate['year'];

$max=pg_query($conn,"SELECT MAX(id_prestasi)
FROM public.prestasi;");
while ($row=pg_fetch_assoc($max)) {
    $id_prestasi=$row['max']+1;
}

$result = pg_query($conn,"INSERT INTO public.prestasi(
	id_prestasi, nisn, thn_pendaftaran, nama_prestasi, skala, jenis, juara, tahun)
	VALUES ($id_prestasi, $nisn, '$tahun_pendaftaran', '$nama_prestasi', '$skala', '$jenis_prestasi', '$peringkat', '$tahun_prestasi');");

header('Location: ../../view/siswa/siswa.php');    


?>