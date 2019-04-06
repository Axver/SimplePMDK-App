<?php
  include "../../controller/connect.php";
  $max_=pg_query($conn,"SELECT MAX(id_prodi)
  FROM public.prodi;");
   while ($row = pg_fetch_assoc($max_)) {
          $max= $row['max'];
  }
  $max=$max+1;
$id_politeknik=$_POST['id_politeknik'];
$prodi=$_POST['prodi'];

$tambah_prodi=pg_query($conn,"INSERT INTO public.prodi(
	id_prodi, id_politeknik, nama_prodi)
	VALUES ($max, $id_politeknik, '$prodi');");

header("Location:../../view/admin");

?>