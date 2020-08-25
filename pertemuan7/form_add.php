<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>

  <form action="action_insert.php" method="POST">
    <?php 
  if(isset($_SESSION['notification_error'])){ ?>
    <p><?php echo $_SESSION['notification_error']; ?></p>
    <?php } ?>
    <h2>Form Add Data</h2>
    <label for="nim">NIM</label>
    <br>
    <input type="text" name="nim">
    <?php echo (isset($_SESSION['nim_field_error'])) ? $_SESSION['nim_field_error'] : ''; ?>
    <br>
    <br>
    <label for="name" name="name">Nama</label>
    <br>
    <input type="text" name="name">
    <?php echo (isset($_SESSION['name_field_error'])) ? $_SESSION['name_field_error'] : ''; ?>
    <br>
    <br>
    <input type="submit" value="Kirim">

    <a href="index.php">Back</a>
  </form>
</body>

</html>

<?php
  session_unset();
?>