<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
$calkowita = 10;
$hex=0xA;
$oct=021;
$bin = 0b1011;
echo $bin;

$x = 3.0;
$name = 'Janusz';
echo "Masz na imie $name";

$surname = 'KOWALSKI';
echo <<< Etykieta
Herdoc<br>
Masz na imie: $name<br>
Nazwisko: $surname<hr>
Etykieta;

$text = <<< Etykieta
Herdoc2<br>
Masz na imię: $name<br>
Nazwisko: $surname<hr>
Etykieta;

$text = <<< E
Nowdoc<br>
Masz na imię: $name<br>
Nazwisko: $surname<hr>
E;

$text='pyra';

echo"zmienna o nazwie \$text ma wartość: $text";

?>


  </body>
</html>
