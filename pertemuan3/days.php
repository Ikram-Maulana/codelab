<?php

// Penulisan lama
// $days = array();

// Penulisan array baru
// CARA SATU (LANGSUNG ISI ELEMENNYA)
$days = ['senin', 'selasa', 'rabu'];
// CARA DUA (SATU SATU)
$days[] = 'kamis';
$days[] = 'jumat';
$days[] = 'sabtu';
$days[] = 'minggu';

// Melihat tipe dan elemennya
// var_dump($days);

// echo $days[0];
// echo "<br>";

// usahakan tidak == tapi != jadi ($i %2 != 0) itu ganjil beda dengan (==) itu genap
for ($i = 0; $i <= 6; $i++){
  if (($i %2) != 0){
  echo $days[$i];
  echo "<br>";
  }
}

//  bisa juga dengan kondisi
// for ($i = 0; $i < count($days); $i++){
//   code
// }

// kalau array -> $array['keynya'];
// kalau object -> $object->keynya

?>