<?php
$student = include 'data_semua_mahasiswa.php';
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
      <th>Name</th>
      <th>NIM</th>
    </tr>
    <tr>
      <?php
if (is_array($student) && count($student) > 0) {
for ($i = 0; $i < count ($student); $i++){
?>
      <td><?php
        echo $student[$i]['id'];
      ?></td>
      <td><?php
        echo $student[$i]['name'];?></td>
      <td><?php
        echo $student[$i]['nim'];
      ?></td>
    </tr>
    <?php } } else {
    ?> <tr>
      <td colspan="4" style="text-align: center;">Data Tidak Ada!</td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>