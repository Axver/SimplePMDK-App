<?php

session_start();

include "../connect.php";

$username=$_SESSION['username'];
$nisn=$_GET['nisn'];
$nama=$_GET['nama'];
$ttl=$_GET['ttl'];
$alamat=$_GET['alamat'];
$bidikmisi=$_GET['bidikmisi'];
$kabupaten=$_GET['kabupaten'];
$jenis_kelamin=$_GET['jenis_kelamin'];
$agama=$_GET['agama'];
$sekolah_asal=$_GET['sekolah_asal'];
$kode_jurusan=$_GET['kode_jurusan'];
$akselerasi=$_GET['akselerasi'];
$prodi1=$_GET['prodi1'];
$prodi2=$_GET['prodi2'];
$prodi3=$_GET['prodi3'];
$getdate=getdate();
$tahun=$getdate['year'];

$max=pg_query($conn,"SELECT MAX(no_pendaftaran)
FROM public.biodata;");
while ($row=pg_fetch_assoc($max)) {
    $no_pendaftaran=$row['max']+1;
}
// Check apakah user sudah pernah menginputkan data
$cek=pg_query($conn,"SELECT *
FROM public.biodata WHERE username='$username';");
$ketemu = pg_num_rows($cek);
if($ketemu>=1)
{
    header('Location: ../../view/siswa/siswa.php');    
    pg_close($conn);
}

$result = pg_query($conn,"INSERT INTO public.biodata(
	nisn, no_pendaftaran, thn_pendaftaran, id_status_bm, kode_jurusan, username, npsn, id_jk, id_kabupaten, id_agama, nama, asal_jurusan, akselerasi, ttl, alamat, asal_sekolah)
	VALUES ('$nisn', $no_pendaftaran, $tahun, $bidikmisi, $kode_jurusan, '$username', '$sekolah_asal', $jenis_kelamin, $kabupaten, $agama, '$nama', $kode_jurusan, '$akselerasi', '$ttl', 'alamat', '$sekolah_asal');");



// Tambahkan Pilihan 1
$pil1=pg_query($conn,"INSERT INTO public.pilihan_(
	pilihan, nisn, thn_pendaftaran, id_prodi)
    VALUES (1, '$nisn', $tahun, $prodi1);");
    
// Tambahkan Pilihan 2
$pil1=pg_query($conn,"INSERT INTO public.pilihan_(
	pilihan, nisn, thn_pendaftaran, id_prodi)
    VALUES (2, '$nisn', $tahun, $prodi2);");
    
// Tambahkan Pilihan 1
$pil1=pg_query($conn,"INSERT INTO public.pilihan_(
	pilihan, nisn, thn_pendaftaran, id_prodi)
    VALUES (3, '$nisn', $tahun, $prodi3);");
// header('Location: ../../view/siswa/siswa.php');
?>