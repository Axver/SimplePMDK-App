<?php

session_start();
// $username=$_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../../assets/bootstrap/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../../assets/bootstrap/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/bootstrap/demo/demo.css" rel="stylesheet" />
    
</head>
<body style='background-color:#171941;'>


<?php
include "../../controller/connect.php";
$npsn=$_GET['npsn'];
$sql="SELECT npsn, sekolah.username as un, nama_sekolah, alamat_sekolah, kepala_sekolah, password
FROM public.sekolah INNER JOIN user_pmdk ON sekolah.username=user_pmdk.username WHERE sekolah.npsn='$npsn';";
$result=pg_query($conn,$sql);

while ($row=pg_fetch_assoc($result)) {
    $npsn=$row['npsn'];
    $nama_sekolah=$row['nama_sekolah'];
    $alamat_sekolah=$row['alamat_sekolah'];
    $kepala_sekolah=$row['kepala_sekolah'];
    $password=$row['password'];
    $username=$row['un'];
    
}


?>

<div class='row' style='margin-top:100px;'>
<div class='col-sm-4'></div>
<div class='col-sm-4'>
<h3 style='text-align:center;'>Edit Sekolah</h3>

<form action="../../controller/admin/edit_sekolah.php" method='POST'>

<input class='form-control' style='color:white;' type="hidden" name="npsn" id="" value='<?php echo $npsn; ?>'>
Nama Sekolah:<input class='form-control' style='color:white;' type="text" name="nama_sekolah" id="" value='<?php echo $nama_sekolah; ?>'>
Alamat Sekolah:<input class='form-control' style='color:white;' type="text" name="alamat_sekolah" id="" value='<?php echo $alamat_sekolah; ?>'>
Username: <input class='form-control' style='color:white;' type="text" name="username" id="" value='<?php echo $username; ?>'>
Password: <input class='form-control' style='color:white;' type="text" name="password" id="" value='<?php echo $password; ?>'>
Kepala Sekolah :<input class='form-control' style='color:white;' type="text" name="kepala_sekolah" id="" value='<?php echo $kepala_sekolah; ?>'>

<input style='text-align:center;' type="submit" class='btn btn-normal' value='Edit'>
    

</form>


</div>
<div class='col-sm-4'></div>

</div>


</body>
</html>