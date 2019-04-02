<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
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
$result = pg_query($conn,"SELECT nisn, thn_pendaftaran, no_pendaftaran,nama,akselerasi, ttl, alamat, image,agama.agama as agama,asal_jurusan.nama_jurusan as nama_jurusan,jenis_kelamin.jenis_kelamin as jk,provinsi.provinsi as provinsi,sekolah.nama_sekolah as nama_sekolah,status_bidikmisi.status as status_bm,kabupaten.nama_kabupaten as nama_kabupaten
FROM public.biodata INNER JOIN agama ON biodata.id_agama=agama.id_agama INNER JOIN asal_jurusan ON biodata.kode_jurusan=asal_jurusan.kode_jurusan
INNER JOIN jenis_kelamin ON biodata.id_jk=jenis_kelamin.id_jk INNER JOIN kabupaten ON biodata.id_kabupaten=kabupaten.id_kabupaten
INNER JOIN provinsi ON kabupaten.id_provinsi=provinsi.id_provinsi INNER JOIN sekolah ON biodata.npsn=sekolah.npsn
INNER JOIN status_bidikmisi ON biodata.id_status_bm=status_bidikmisi.id_status_bm WHERE biodata.username='$username';");
// $rows = pg_num_rows($result);

while ($row=pg_fetch_assoc($result)) {
    $image=$row['image'];
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


<script>
		// window.print();
	</script>
</body>
</html>