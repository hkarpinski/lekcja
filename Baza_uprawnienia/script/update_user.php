<?php
session_start();

if (isset($_POST['button']) && !empty($_POST['name']) && !empty($_POST['surname'])
&& !empty($_POST['birthday']) !empty($_POST['id'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $id = $_POST['id'];
    echo "ok";
//echo $id;
  require_once('./connect/connect.php');
 $sql = "UPDATE `user` SET `name`= '$name' , `surname`= '$surname' , `birthday`= '$birthday' WHERE `id`='$id'"

 mysqli_query($conn, $sql)
}
  header('location: ../');

 ?>
