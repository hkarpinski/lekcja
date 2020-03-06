<?php

    class User
    {
        public $name;
        public $surname;

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setSurname($surname)
        {
            $this->surname = $surname;
        }

        public function getSurname()
        {
            return $this->surname;
        }

        public function getAll()
        {
          echo <<< SHOW
            <hr>
            Imie: $this->name<br>
            Nazwisko: $this->surname<br>
            </hr>
SHOW;
        }

        public function setAll($name,$surname)
         {
           $this->name=$name;
           $this->surname=$surname;
         }
    }

    $person = new User();

    $person->name="Janusz ";

    echo $person->name;

    $person->setName("Janusz");
    $person->setSurname("Nowak");

    echo $person->name;
    echo $person->surname;

    $person->getAll();

  $person->setAll("Krystyna","Kowal");
  $person->getAll();

?>
