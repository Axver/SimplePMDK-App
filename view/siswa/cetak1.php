<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Bukti Pendaftaran PMDK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</head>
<body>

<div class='container'>


<div class='row'>
<div class='col-sm-1'></div>
<div class='col-sm-1'>
<img style='height:100px;' src="file/logo.jpg" alt="" class='img-responsive img-rounded'>
</div>

<div class='col-sm-4'><b>Penelurusan Minat dan Kemampuan</b>
<br>
<small>Politeknik Se-Indonesia</small>

</div>
<div class='col-sm-3'></div>
<div class='col-sm-2'>
<img style='height:100px;' src="file/tutwuri.png" alt="">
</div>



</div>

<div class='row'>
<div class='col-sm-1'>
</div>
<div class='col-sm-10'>
<!-- Horizontal Line -->
<hr style='color:blue; background-color:blue;' size="40">


</div>

<div class='col-sm-1'></div>
</div>
</div>
</div>


<div class='row'>
<div class='col-sm-1'></div>
<div class='col-sm-10' style='text-align:center;'><b>BUKTI Pendaftaran PMDK Tahun 2019</b></div>
<div class='col-sm-1'></div>
</div>

<div class='row'>
<div class='col-sm-2'></div>
<div class='col-sm-6' style='text-align:left;'><b>Data Diri</b>
<table>
<th></th>
<th></th>


<?php
include '../../controller/connect.php';
session_start();
$username=$_SESSION['username'];
$result = pg_query($conn,"SELECT nisn, thn_pendaftaran, no_pendaftaran,nama,akselerasi, ttl, alamat, image,agama.agama as agama,asal_jurusan.nama_jurusan as nama_jurusan,jenis_kelamin.jenis_kelamin as jk,provinsi.provinsi as provinsi,sekolah.nama_sekolah as nama_sekolah,kepala_sekolah,status_bidikmisi.status as status_bm,kabupaten.nama_kabupaten as nama_kabupaten
FROM public.biodata INNER JOIN agama ON biodata.id_agama=agama.id_agama INNER JOIN asal_jurusan ON biodata.kode_jurusan=asal_jurusan.kode_jurusan
INNER JOIN jenis_kelamin ON biodata.id_jk=jenis_kelamin.id_jk INNER JOIN kabupaten ON biodata.id_kabupaten=kabupaten.id_kabupaten
INNER JOIN provinsi ON kabupaten.id_provinsi=provinsi.id_provinsi INNER JOIN sekolah ON biodata.npsn=sekolah.npsn
INNER JOIN status_bidikmisi ON biodata.id_status_bm=status_bidikmisi.id_status_bm WHERE biodata.username='$username';");
// $rows = pg_num_rows($result);

while ($row=pg_fetch_assoc($result)) {
    $image=$row['image'];
    $nama=$row['nama'];
    $kepala_sekolah=$row['kepala_sekolah'];
    ?>
    
    <tr><td>Nama  :</td><td><?php echo $row['nama']; ?></td></tr>
    <tr><td>No Pendaftaran  :</td><td><?php echo $row['no_pendaftaran']; ?></td></tr>
    <tr><td>NISN   :</td><td><?php echo $row['nisn']; ?></td></tr>
    <tr><td>Jenis Kelamin :</td><td><?php echo $row['jk']; ?></td></tr>
    <tr><td>Agama :</td><td><?php echo $row['agama']; ?></td></tr>
    <tr><td>Tempat Tanggal Lahir :</td><td><?php echo $row['ttl']; ?></td></tr>
    <tr><td> Alamat:</td> <td><?php echo $row['alamat']; ?></td> </tr>
    <tr><td>Provinsi :</td><td><?php echo $row['provinsi']; ?></td></tr>
    <tr><td>Nama Kabupaten :</td><td><?php echo $row['nama_kabupaten']; ?></td></tr>
    <tr><td>Nama Sekolah:</td><td><?php echo $row['nama_sekolah']; ?></td></tr>
    <tr><td>Nama Jurusan :</td><td><?php echo $row['nama_jurusan']; ?></td></tr>
    <tr><td>Status Bidikmisi:</td><td><?php echo $row['status_bm']; ?></td></tr>

<?php
}
?>

</table>
</div>

<div class='col-sm-3'>
<img src="file/<?php echo $image; ?>" alt="">
</div>
<div class='col-sm-1'></div>
</div>

<div class='row'>
<div class='col-sm-2'></div>
<div class='col-sm-7'>


<h3>Data Rapor:</h3>



<?php

// Dapatkan max semester

$max_semester=pg_query($conn,"SELECT MAX(semester) FROM nilai_semester;");
while ($row=pg_fetch_assoc($max_semester)){
    $max=$row['max'];
}

$i=1;
while ($i<=$max)
{
    $nilai=pg_query($conn,"SELECT  daftar_mapel.nama_mapel as nama_mapel, nilai_mapel,semester.peringkat as peringkat,nilai_semester.semester as semester
    FROM public.nilai_semester INNER JOIN semester ON nilai_semester.nisn=semester.nisn
    AND nilai_semester.semester=semester.semester AND nilai_semester.thn_pendaftaran=semester.thn_pendaftaran
    INNER JOIN daftar_mapel ON nilai_semester.kode_mapel=daftar_mapel.kode_mapel 
    INNER JOIN biodata ON semester.nisn=biodata.nisn AND semester.thn_pendaftaran=biodata.thn_pendaftaran 
    WHERE username='$username' AND nilai_semester.semester=$i;");
echo "<br/>";
echo"Semester"."  $i";

while ($row=pg_fetch_assoc($nilai)) {

    echo "[".$row['nama_mapel']." :".$row['nilai_mapel']."]"." ";
    $peringkat=$row['peringkat'];
}
     echo "[Peringkat: ".$peringkat."]";
     $i++;
}

echo "<br/>";

?>

<h3>Daftar Prestasi:</h3>

<?php

$prestasi=pg_query($conn,"SELECT id_prestasi, nama_prestasi, skala, jenis, juara, tahun
FROM public.prestasi INNER JOIN biodata ON prestasi.nisn=biodata.nisn AND prestasi.thn_pendaftaran=biodata.thn_pendaftaran
WHERE username='$username';");

while ($row=pg_fetch_assoc($prestasi)) {

    echo "Nama Prestasi:".$row['nama_prestasi']. "   ";
    echo "Skala:".$row['skala']. "   ";
    echo "Juara:".$row['juara']. "   ";
    echo "Jenis:".$row['jenis']. "   ";
    echo "Tahun:".$row['tahun']. " <br/>  ";
}

?>


<h3>Pilihan:</h3>

<?php

$pilihan=pg_query($conn,"SELECT pilihan,nama_prodi,nama_politeknik
FROM public.pilihan_ INNER JOIN prodi ON pilihan_.id_prodi=prodi.id_prodi
INNER JOIN daftar_poltek ON prodi.id_politeknik=daftar_poltek.id_politeknik
INNER JOIN biodata ON pilihan_.nisn=biodata.nisn AND pilihan_.thn_pendaftaran=biodata.thn_pendaftaran WHERE username='$username';");

while ($row=pg_fetch_assoc($pilihan)) {

    echo "Pilihan:".$row['pilihan']. "   ";
    echo "Nama Prodi:".$row['nama_prodi']. "   ";
    echo "Nama Politeknik:".$row['nama_politeknik']. " <br/>";
}

?>


</div>


</div>

<br>

<div class='row'>
<div class='col-sm-2'>

</div>

<div class='col-sm-2' style='text-align:center;'>Saya Menyatakan Kebenaran Seluruh Data,

<br>
<br>
<br>

<?php
echo $nama;
?>
</div>

<div class='col-sm-4'></div>
<div class='col-sm-2' style='text-align:center;'>
Mengetahui Kepala Sekolah,
<br><br><br>
<?php
echo $kepala_sekolah;
?>
</div>




</div>


<script>
		window.print();
	</script>
</body>
</html>