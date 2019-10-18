<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <form method="post">
    <input type="number" name="number">
    <input type="submit" name="button" value="wypisz">
    <input type="text" name="hasło">
      </form>
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
//pętle
//for ($i=15; $i > 0 ; $i--) {
//if ($i %2==0) {
//  echo "$i";
//wyświetl liczby parzyste z przedziału <1;15> w porządku malejącym
//Użytkownik podaje wysokość choinki
if(!empty($_POST['number'])){
  $number = $_POST['number'];
  for ($i=1; $i <= $number ; $i++) {
     for ($k=0; $k < $i ; $k++)
       echo "*";
       echo "<br>";
  }

}
//uzytkownik podaje z klawiatury hasło przynajmniej raz
//ma 3 próby na odgadnięcia hasła
// po 3 nieudanej próbie wyswietli sie komunikat o negatywnym wpisaniu hasła
//jesli odgadnie hasło wczesniej to wyswietlamy komunikat o prawidłowym hasle, nr próby
//hasło to okoń
if(!empty($_POST['hasło'])){
  $hasło = "okoń";
  do
  {
    echo "podaj hasło ";
  }
  while ($hasło <= 3)
    echo "twoje hasło jest poprawne";

}
 ?>
