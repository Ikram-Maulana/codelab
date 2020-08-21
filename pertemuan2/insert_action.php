<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $nim = $_POST['nim'];

  $isEmptyFields = false;
  $nimFieldError = false;
  $nameFieldError = false;

  if (empty($name)) {
    $isEmptyFields = true;
    $nameFieldError = true;
  } 
  if (empty($nim)) {
    $isEmptyFields = true;
    $nimFieldError = true;
  }

  if ($isEmptyFields == true) {
    $_SESSION['notification_error'] = 'Silahkan Lengkapi Form.';

    if ($nimFieldError == true) {
      $_SESSION['nim_field_error'] = 'field ini tidak boleh kosong.';
    }
    if ($nameFieldError == true) {
      $_SESSION['name_field_error'] = 'field ini tidak boleh kosong.';
    }
    
    header('location:form_add.php');
  } else {
    echo "nim = $nim, nama = $name";
  }
} else {
  echo "Forbidden Access";
}

?>