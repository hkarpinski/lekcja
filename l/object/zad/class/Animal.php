<?php
class Animal
{
public $gatunek;
public $kraj;
public $waga;
public $wzrost;
public $nogi;

function __construct($gatunek,$kraj,$waga,$wzrost)
{
$this->gatunek=$gatunek;
$this->kraj=$kraj;
$this->waga=$waga;
$this->wzrost=$wzrost;
$this->nogi =4;
}

public function getAll()
{
echo <<<SHOW
<hr>
Gatunek: $this->gatunek<br>
Kraj: $this->kraj<br>
Waga: $this->waga kg<br>
Wzrost: $this->wzrost cm<br>
Nogi: $this->nogi
<hr>
SHOW;
}

}


 ?>
