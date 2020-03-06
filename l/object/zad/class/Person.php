<?php
class Person
{
public $imie;
public $nazwisko;
public $data;
public $miejsc;



public function setAll($imie,$nazwisko,$data,$miejsc)
{
  $this->imie=$imie;
  $this->nazwisko=$nazwisko;
  $this->data=$data;
  $this->miejscowosc=$miejsc;

}
public function getAll()
{
  echo <<< SHOW
    <hr>
    Imie i nazwisko: $this->imie,$this->nazwisko<br>
    Data urodzenia: $this->data<br>
    Miejscowosc: $this->miejscowosc
    </hr>
SHOW;
}
}


$person = new Person();
$person->setAll("Hubert","Karpiński","01-06-2001","Poznan");
$person->getAll();

 ?>
