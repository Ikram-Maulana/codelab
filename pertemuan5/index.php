<?php
$students = include 'data_mahasiswa.php';
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
  <table border="1px" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
    </tr>
    <tr>
      <?php
if (is_array($students) && count($students) > 0) {
for ($i = 0; $i < count ($students); $i++){
?>
      <td><?php
        echo $students[$i]['id'];
      ?></td>
      <td><?php
        echo $students[$i]['nim'];
      ?></td>
      <td><?php
        echo $students[$i]['name'];?></td>
    </tr>
    <?php } } else {
    ?> <tr>
      <td colspan="4" style="text-align: center;">Data Tidak Ada!</td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>