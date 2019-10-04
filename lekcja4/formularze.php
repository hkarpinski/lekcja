<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="name" placeholder="Imię" autofocus><br><br>
      <input type="text" name="surname" placeholder="Nazwisko"><br><br>
      <input type="number" name="age" placeholder="Wiek"><br><br>
      <input type="submit" name="button" value="Zatwierdź"><br><br>
    </form>

    <?php

        if(!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['age'])){

          $imie = $_GET['name'];
          $nazwisko = $_GET['surname'];
          $wiek = $_GET['age'];

          echo "Imię: $imie<br>";
          echo "Nazwisko: $nazwisko<br>";
          echo "Wiek: $wiek<br>";





        }
     ?>

  </body>
</html>
