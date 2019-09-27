<?php
$text = <<<  T
zsl -Zespół
szkół
Łączności
T;
echo "Przed wywołanie funkcji<br> $text";
echo "Po wywołaniu funkcji nl2br <br>";
echo nl2br($text);

//zamaiana liter
$text = 'JAnuSZ';
echp strtolower($text),'<br';//janusz
echp strtoupper($text),'<br';//JANUSZ
//zamiana pierwszej litery\
$text = 'rAZ Dwa TrzY';
echo ucfirst($text),'<br>';
// zamanaia wszystkich pierwszych liter na duze
echo ucwords($text),'<br>';




 ?>
