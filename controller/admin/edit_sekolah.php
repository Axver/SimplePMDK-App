<?php
include '../connect.php';
$npsn=$_POST['npsn'];
// echo $npsn;
$nama_sekolah=$_POST['nama_sekolah'];
$alamat_sekolah=$_POST['alamat_sekolah'];
$username=$_POST['username'];
$password=$_POST['password'];
$kepala_sekolah=$_POST['kepala_sekolah'];

$sql="UPDATE public.sekolah
SET username='$username', nama_sekolah='$nama_sekolah', alamat_sekolah='$alamat_sekolah', kepala_sekolah='$kepala_sekolah'
WHERE npsn='$npsn';";
echo $sql;
$result=pg_query($conn,$sql);
header("Location:../../view/admin");

?>