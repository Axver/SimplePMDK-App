<?php
include '../../controller/connect.php';
$result = pg_query($conn,"SELECT npsn, sekolah.username as suser, nama_sekolah, alamat_sekolah
FROM public.sekolah INNER JOIN user_pmdk ON sekolah.username=user_pmdk.username LIMIT 3;");
$rows = pg_num_rows($result);

while ($row=pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['npsn']."</td>";
    echo "<td>".$row['nama_sekolah']."</td>";
    echo "<td>"."<a href='informasi_sekolah.php?npsn=".$row['npsn']."'>Informasi</a>"."</td>";
    echo "<td>"."<a href='edit_sekolah.php?npsn=".$row['npsn']."'>Edit</a>"."</td>";
    echo "<td>"."<a href='informasi_sekolah.php?npsn=".$row['npsn']."'>Delete</a>"."</td>";
    
    echo "</tr>";
}

?>