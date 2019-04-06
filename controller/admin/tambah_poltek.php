<?php

include "../connect.php";
$nama_politeknik=$_POST['nama_poltek'];

$max=pg_query($conn,"SELECT MAX(id_politeknik)
FROM public.daftar_poltek;");

while ($row = pg_fetch_assoc($max)) {
    $max=$row['max'];
}
$max=$max+1;

$sql=pg_query($conn,"INSERT INTO public.daftar_poltek(
	id_politeknik, nama_politeknik)
    VALUES ($max, '$nama_politeknik');");

header("Location:../../view/admin");
    



?>