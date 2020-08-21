<?php

$student = include 'data_mahasiswa.php';

$nim = $student['nim'];
$name = $student['name'];
$address = "Jl. Brawijaya 1 NO. 30";
$subject = "Belajar pemrograman PHP";

echo "Nama saya $name, NIM saya $nim Alamat saya di $address dan sekarang sedang menjalani $subject";

?>