<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



<?php
  if (!empty($_POST['imie'])) &&!empty($_POST['kraj']) {
      $imie = $_POST['imie'];
      $kraj = $_POST['kraj'];
      $ilosc = strlen($imie);
      echo "DANE POBRANE OD UZYTKOWNIKA: $imie, ilość liter: $ilosc<br>";
    $ilosc<br>;
    $poprawne = ucfirst(strtolower(substr(trim($imie)0,10)))))

 switch ($kraj)
 {case 'pl';
   $kraj = 'Polska'
   break;
    case 'fr';
   $kraj = 'Francja'
   break;

 }
$ilosc = strlen($imie);
      echo "Po wyczyszczeniu bialych znakow: $ilosc, IMIE: $poprawne<br>";
       $ilosc, imie: $poprawne<br>;
}
  ?>
  <form method="post">

      IMIE: <input type="text" name="imie" autofocus><br><br>
            <input type="radio" name="kraj" value="pl">
            <input type="radio" name="kraj" value="fr">
            <center>  <input type="submit" name="button"></center>
  </form>

  <?php
   ?>
</body>
</html>
