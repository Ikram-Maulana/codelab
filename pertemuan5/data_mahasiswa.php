<?php

include 'db_config.php';

$sql = "SELECT id, nim, name FROM students";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) >0){
  // echo "Ada datanya!";

  for ($students = []; $student = mysqli_fetch_assoc($result); $students[] = $student) {
  }
  return $students;

  // var_dump($students);
} 
// else {
//   echo "Data kosong!";
// }
  return false;

?>