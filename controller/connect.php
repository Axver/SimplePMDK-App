<?php

$username='postgres';
$password='toor';
$url='localhost';
$port=5432;
$dbname='app_pmdk';

$conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");

?>