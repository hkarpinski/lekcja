<?php
session_start();
  if (isset($_POST['button']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $id = $_SESSION['id'];

    require_once('./connect.php');

    //$sql = "INSERT INTO `user`( `name`, `surname`, `birthday`) VALUES ('$name', '$surname', '$birthday')";

    $sql = "UPDATE `user` set`name` = '$name',`surname`= '$surname',`birthday`= '$birthday' where `user` `id`=$id"
    mysqli_query($conn, $sql);
  }
  header('location: ../')
 ?>
