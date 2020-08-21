<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "db_belajar";

//  Cara Baru
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Cek Koneksi
if (! $connection) {
  die ('Gagal terhubung ke database: ' . myslqli_connect_error());
}

?>