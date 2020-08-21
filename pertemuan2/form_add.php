<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>

<body>

  <form action="process.php" method="POST">
    <?php 
  if(isset($_SESSION['notification_error'])){ ?>
    <p><?php echo $_SESSION['notification_error']; ?></p>
    <?php } ?>
    <label for="nim">NIM</label>
    <br>
    <input type="text" name="nim">
    <?php echo (isset($_SESSION['nim_field_error'])) ? $_SESSION['nim_field_error'] : ''; ?>
    <br>
    <label for="name" name="name">Nama</label>
    <br>
    <input type="text" name="name">
    <?php echo (isset($_SESSION['name_field_error'])) ? $_SESSION['name_field_error'] : ''; ?>
    <br>
    <br>
    <input type="submit" value="Kirim">
  </form>
</body>

</html>

<?php
  session_unset();
?>