<?php

session_start();

$name = $_POST['name'];
$nim = $_POST['nim'];

if (empty($name) || empty($nim)){
  $_SESSION['notification_error'] = 'Data tidak boleh kosong!';
  $_SESSION['nim'] = $nim;
  $_SESSION['name'] = $name;
  if (empty($nim)){
    $_SESSION['nim_field_error'] = 'Field tidak boleh kosong.';
  }
  if (empty($name)){
    $_SESSION['name_field_error'] = 'Field tidak boleh kosong.';
  }
  header('location:form_addtest.php');
} else {
  echo "NIM = $nim
  <br>
  Nama = $name";
}


?>