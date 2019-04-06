<?php
session_start();
$created=$_SESSION['username'];
include '../connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$tambah=pg_query($conn,"INSERT INTO public.user_pmdk(
	username, created_by, password, jenis_user)
	VALUES ('$username', '$created', '$password', 'siswa');");

header("Location:../../view/sekolah");
?>