<?php
session_start();

require_once './connect/connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM `user` where `id`=$id";
if ($result = mysqli_query($conn ,$sql)){
  $_SESSION['result'] = "Użytkownik został usunięty";
   header('location: ../');
 }
 ?>
