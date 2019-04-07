<?php

include "../connect.php";

session_start();
$username=$_SESSION['username'];
$npsn=$_POST['npsn'];
$nama_sekolah=$_POST['nama_sekolah'];
$alamat=$_POST['alamat'];
$kepala_sekolah=$_POST['kepala_sekolah'];

echo $username.$npsn.$nama_sekolah.$alamat.$kepala_sekolah;

$tambah=pg_query($conn,"INSERT INTO public.sekolah(
	npsn, username, nama_sekolah, alamat_sekolah, kepala_sekolah)
	VALUES ('$npsn', '$username', '$nama_sekolah', '$alamat', '$kepala_sekolah');");

header("Location:../../view/sekolah");


?>