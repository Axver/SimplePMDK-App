<?php
include '../../controller/connect.php';

$username=$_SESSION['username'];
$result = pg_query($conn,"SELECT username, created_by, password, jenis_user
FROM public.user_pmdk WHERE jenis_user='siswa' AND created_by='$username';");
$rows = pg_num_rows($result);

while ($row=pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['created_by']."</td>";
    echo "<td>"."<a href='".$row['username']."'>Informasi</a>"."</td>";
    echo "<td>"."<a href='".$row['username']."'>Edit</a>"."</td>";
    echo "<td>"."<a href='".$row['username']."'>Delete</a>"."</td>";
    
    echo "</tr>";
}

?>