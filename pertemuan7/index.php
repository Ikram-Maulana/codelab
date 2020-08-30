<?php
session_start();

include 'function.php';
$sql = "select id, nim, name FROM students";
$students = query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>

<body>
  <h2>Data Mahasiswa</h2>
  <a href="form_add.php">Tambah</a>
  <br>
  <br>
  <?php 
  if(isset($_SESSION['notification'])){ ?>
  <p><?php echo $_SESSION['notification']; ?></p>
  <?php } ?>
  <?php
  if(isset($_SESSION['notification_error'])){ ?>
  <p><?php echo $_SESSION['notification_error']; ?></p>
  <?php } ?>
  <table border="1px" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Action</th>
    </tr>
    <tr>
      <?php if (is_array ($students) && count($students) > 0) : ?>
      <?php
        $no = 1;
        foreach ($students as $student) : ?>
      <td><?php
        echo $no++;
      ?></td>
      <td><?php
        echo $student['nim'];
      ?></td>
      <td><?php
        echo $student['name'];?></td>
      <td><a href="form_update.php?id=<?php echo $student['id']; ?>">Edit</a>
        <a href="action_delete.php?id=<?php echo $student['id']; ?>">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php else : ?>
    <tr>
      <td colspan="4" style="text-align: center;">Data Tidak Ada!</td>
    </tr>
    <?php endif; ?>
  </table>
</body>

</html>

<?php
  session_unset();
?>