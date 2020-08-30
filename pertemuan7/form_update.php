<?php
session_start();

include 'function.php';
$id = $_GET['id'];
$sql = "select nim, name FROM students WHERE id='".$id."'";
$students = query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit</title>
</head>

<body>
  <h2>Edit Data Mahasiswa</h2>
  <a href="index.php">Kembali</a>
  <br>
  <br>
  <?php 
  if(isset($_SESSION['notification_error'])){ ?>
  <p><?php echo $_SESSION['notification_error']; ?></p>
  <?php } ?>
  <form action="action_update.php" method="post">
    <?php foreach ($students as $student) : ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nim">NIM</label>
    <br>
    <input type="text" name="nim" value="<?php echo $student['nim']; ?>">
    <?php echo (isset($_SESSION['nim_field_error'])) ? $_SESSION['nim_field_error'] : ''; ?>
    <br>
    <br>
    <label for="name" name="name">Nama</label>
    <br>
    <input type="text" name="name" value="<?php echo $student['name']; ?>">
    <?php echo (isset($_SESSION['name_field_error'])) ? $_SESSION['name_field_error'] : ''; ?>
    <br>
    <br>
    <input type="submit" value="Kirim">
    <?php endforeach; ?>
  </form>
</body>

</html>
<?php session_unset(); ?>