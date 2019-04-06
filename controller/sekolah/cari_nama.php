<?php
include "../connect.php";
session_start();
$created_by=$_SESSION['username'];
header("Content-Type: application/json");

$nama=$_GET['nama'];
$cari_nama=pg_query($conn,"SELECT username, created_by, password, jenis_user
FROM public.user_pmdk WHERE username='$nama' AND created_by='$created_by';");

// echo pg_num_rows($cari_nama);
$jumlah=pg_num_rows($cari_nama);

if($jumlah<=0)
{
    $hasil_ = array(
        'status'=> 'Data Tidak Ditemukan',
        'error' => 'true'
        );
}
else

{

    $hasil_ = array(
        'status'=> 'Data Ditemukan',
        'error' => 'false',
        'user'=>array()
        );
        while ($isinya = pg_fetch_assoc($cari_nama)) {
            $user = array(
            
            'username' => $isinya['username'],
            'created_by' => $isinya['created_by'],
            'password' => $isinya['password']
        );
        array_push($hasil_['user'], $user);
        }

}


echo $data= json_encode($hasil_);


?>