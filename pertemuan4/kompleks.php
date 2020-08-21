<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kompleks</title>
</head>

<body>
  <?php $student = include 'data_semua_mahasiswa.php'; ?>
  <?php $matkul = include 'data_mata_kuliah.php'; ?>
  <?php $scores = include 'data_nilai.php'; ?>
  <table border="1" cellspacing=0 cellpadding=5px>
    <tr>
      <th>Mata Kuliah</th>
      <?php foreach ($student as $students) : ?>
      <th><?php echo $students['name']; ?></th>
      <?php endforeach; ?>
    </tr>

    <?php foreach ($matkul as $matkuls) : ?>
    <tr>
      <td><?php echo $matkuls['name']; ?></td>
      <?php foreach ($student as $students) : ?>
      <?php foreach ($scores as $scorer) : ?>
      <?php if ($scorer['subject_id']==$matkuls['subject_id'] && $scorer['student_id']==$students['student_id']) : ?>
      <td><?php echo $scorer['score']; ?><br></td>
      <?php endif; ?>
      <?php endforeach; ?>
      <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>