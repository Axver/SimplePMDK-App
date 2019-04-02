<?php
include '../connect.php';
session_start();
$semester=$_POST['semester'];
$peringkat=$_POST['peringkat'];

$username=$_SESSION['username'];

$result = pg_query($conn,"SELECT nisn, thn_pendaftaran
FROM public.biodata WHERE username='$username';");
// $rows = pg_num_rows($result);

while ($row=pg_fetch_assoc($result)) {

    $nisn=$row['nisn'];
    $thn_pendaftaran=$row['thn_pendaftaran'];

}


$insert=pg_query($conn,"INSERT INTO public.semester(
	nisn, thn_pendaftaran, semester, peringkat)
    VALUES ($nisn, '$thn_pendaftaran', '$semester', $peringkat);");
    
    header('Location: ../../view/siswa/siswa.php');    

?>