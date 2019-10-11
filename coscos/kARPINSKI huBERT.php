<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post">

        IMIE: <input type="text" name="imie" autofocus><br><br>
              <center>  <input type="submit" name="button"></center>
    </form>

<?php

    if (!empty($_POST['imie'])) {
      $imie = $_POST['imie'];
      $ilosc = strlen($imie);
      echo "DANE POBRANE OD UZYTKOWNIKA: $imie, ilość liter: $ilosc<br>";


        //usuwanie bialych znakow

          $poprawne = trim($imie);

        //ograniczenie do 10 znakow

        $poprawne = substr($poprawne, 0, 10);
        $ilosc = strlen($poprawne);

        //zamiana na male litery

        $poprawne = strtolower($poprawne);

       //zamiana pierwszej litery na dużą
       $poprawne = ucfirst($poprawne);
        echo "Po wyczyszczeniu bialych znakow: $ilosc, IMIE: $poprawne<br>";
}
    else
    {
   echo "Wypełnij pole imie";
    }
 ?>
</body>
</html>
