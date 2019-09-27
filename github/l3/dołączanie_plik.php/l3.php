<?php

//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FIELES, $_SESSION, $_SERVER
ECHO $_SERVER('Script_name'); //ZSL/2.PHP
ECHO $_SERVER('SCRIPT_PROTOCOL'); //hTTP/1.1
ECHO $_SERVER('DOCUMENT_ROOT');
//$localfile = $_SERVER('DOCUMENT_ROOT').$_SERVER('Script_name');
$localfile = $_SERVER('DOCUMENT_ROOT')
$localfile .=$_SERVER[script_name];


echo '<br>',$localfile;
############################################
//stałecho
//nazwy z duzych liter

defline('name','janusz')
echo '<br>',NAME;

defline('surname','kowalksi')
echo '<br>',surname;

defline('COUNTRY','polska',true)
echo '<br>',CoUnTrY;
###############################################
//stałe predefiniowane
echo PHP_VERSION;
echo gettype(PHP_VERSION);//string
if (PHP_VERSION>5.6)
{
  echo 'Nowa wersja php';
}
else {
  echo 'Nowa wersja php';
}


 ?>
