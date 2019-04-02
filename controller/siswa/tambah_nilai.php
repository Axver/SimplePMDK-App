<?php
include '../connect.php';

session_start();
$semester=$_GET['semester'];
// $peringkat=$_GET['peringkat'];
$mapel=$_GET['mata_pelajaran'];
$nilai=$_GET['nilai'];

// Username
$username=$_SESSION['username'];

$result = pg_query($conn,"SELECT nisn, thn_pendaftaran
FROM public.biodata WHERE username='$username';");
// $rows = pg_num_rows($result);

while ($row=pg_fetch_assoc($result)) {

    $nisn=$row['nisn'];
    $thn_pendaftaran=$row['thn_pendaftaran'];

}

// echo $nisn.$thn_pendaftaran;
$result = pg_query($conn,"INSERT INTO public.nilai_semester(
	nisn, thn_pendaftaran, semester, kode_mapel, nilai_mapel)
	VALUES ($nisn, '$thn_pendaftaran', $semester, $mapel, $nilai);");

header('Location: ../../view/siswa/siswa.php');    

?>