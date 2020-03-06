<?php
class Car
{
public $brand;
public $model;
public $country;

function __construct($brand,$model,$country)
{
$this->brand=$brand;
$this->model=$model;
$this->country=$country;
}

public function getAll()
{
echo <<<SHOW
<hr>
Marka: $this->brand<br>
Model: $this->model<br>
Kraj: $this->country
<hr>
SHOW;
}

}

$osoba = new Car("VW", "Polo", "Niemcy");
$osoba->getAll();
 ?>
