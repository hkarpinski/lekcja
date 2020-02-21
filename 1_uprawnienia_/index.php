<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Baza - uprawnienia</title>
  </head>
  <body>
    <h3>Użytkownicy z tabeli user</h3>
    <?php
      require_once('./scripts/connect.php');
      require_once('./scripts/function.php');

      $sql = "SELECT * FROM `user` INNER JOIN `color` on user.color=color.id";
      $result = mysqli_query($conn, $sql);


      echo <<<TABLE
        <table>
          <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Rok urodzenia</th>
            <th>Ulubiony kolor</th>
          </tr>
TABLE;
          while ($row = mysqli_fetch_assoc($result)) {
            $year = year($row['birthday']);
            echo <<<ROW
              <tr>
                <td>$row[name]</td>
                <td>$row[surname]</td>
                <td>$row[birthday]</td>
                <td>$year</td>
                <td>$row[color]</td>
              <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
                <td><a href="./?updateId=$row[id]">Aktualizuj</a></td>
              </tr>
ROW;
          }
        echo "</table>";
        echo "<h3>Dodanie użytkownika</h3>";
     ?>

     <form action="./scripts/add_user.php" method="post">
       <input type="text" name="name" placeholder="Imię"><br><br>
       <input type="text" name="surname" placeholder="Nazwisko"><br><br>
       <input type="date" name="birthday"><br><br>
       <select  name="kolor">
         <option value="1">Czarny</option>
         <option value="2">Biały</option>
         <option value="3">Czerwony</option>
         <option value="4">Zielony</option>

       </select><br>
       <input type="submit" name="button" value="Dodaj użytkownika">
     </form>
<?php
session_start();

if (isset($_GET['updateId'])) {
$_SESSION['id'] = $_GET['updateId'];
$sql = "SELECT * FROM user WHERE id='$_SESSION[id]'";
$result =mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

echo <<<FORMUPDATE
<hr><h3>Aktualizacja użytkownika</h3>
<form action="./scripts/mod_user.php" method="post">
  <input type="text" name="name" value="$user[name]"><br><br>
  <input type="text" name="surname" value=$user[surname]><br><br>
  <input type="date" name=$user[birthday]><br><br>
  <input type="submit" name="button" value="Aktualizuj użytkownika">
</form>
FORMUPDATE;

}

 ?>

  </body>
</html>
