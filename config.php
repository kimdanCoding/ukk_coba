<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kasir_3";

$koneksi = mysqli_connect($hostname, $username, $password, $database);


//cek koneksi
if (!$koneksi) {
  echo "GAGAL KONEKSI KE DATABASE";
}
