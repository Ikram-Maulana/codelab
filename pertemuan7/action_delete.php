<?php
session_start();
$id = $_GET['id'];
$nim = $_POST['nim'];
$name = $_POST['name'];

include 'function.php';
    if (delete($id,$nim,$name) > 0){

      $_SESSION['notification'] = 'Data berhasil diahpus.';
      header ('location: index.php');

    } else {

    $_SESSION['error_notification'] = 'Gagal menghapus data. Silahkan coba lagi';
    header('Location: index.php');  

    }
?>