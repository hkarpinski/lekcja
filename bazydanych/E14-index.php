<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <?php
    //skrypt1

    $connect = new mysqli("localhost","root","","sklep");
    $sql = "SELECT `nazwa` from `towary` where `promocja`=0";
    $result = mysqli_query($connect , $sql);
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>$row[nazwa]</li>";
}
echo "</ul>";

//reszta samemu

    //skrypt 2

?>
      <form method="post">
        <select name="towar">
          <option value="Pisaki 6 szt.">Gumka do mazania</option>
          <option value="Cienkopis">Cienkopisy</option>
          <option value="Gumka do mazania">Pisaki 60 szt.</option>
          <option value="Markery 4 szt.">Markery 4 szt.</option>
        </select>
        <input type="submit" name="buttom" value="WYBIERZ">
      </form>
      <?php

      //skrypt2
      if(isset($_POST["towar"])){
      $towar = $_POST["towar"];
      $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`= '$towar'";
      $result = mysqli_query($connect, $sql);
      $row = mysqli_fetch_assoc($result);
      echo round($row["cena"] * 0.85 , 2);


}


      mysqli_close($connect);
       ?>
  </body>
</html>
