<?php
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "crud";	//nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db('crud') or die("Tidak ada database yang dipilih!");
?>