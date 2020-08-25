<?php

include 'db_config.php';

function query($sql) {

  global $connection;

  $result = mysqli_query($connection, $sql);
  
  if (mysqli_num_rows($result) >0){

    for ($students = []; $student = mysqli_fetch_assoc($result); $students[] = $student) {
    }
    
    return $students;

  } 

    return false;

}

function save($nim, $name){
  
  global $connection;

  $sql = "INSERT INTO `students` (id, nim, name) VALUES (null, '{$nim}', '{$name}')";
  mysqli_query($connection, $sql);

  return mysqli_affected_rows($connection);

}

function update($id,$nim,$name){

  global $connection;

  $sql = "UPDATE `students` SET nim='".$nim."',name='".$name."' WHERE id='".$id."'";
  mysqli_query($connection, $sql);

  return mysqli_affected_rows($connection);

}

function delete($id,$nim,$name){

  global $connection;

  $sql = "DELETE FROM `students` WHERE id='".$id."'";
  mysqli_query($connection, $sql);

  return mysqli_affected_rows($connection);

}

?>