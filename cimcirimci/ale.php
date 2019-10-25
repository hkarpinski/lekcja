<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="cos.css">
  </head>
    <body>
      <table>

    <form method="post">
      Wpisz liczbe : <input type="number" name="wiersz">
    <input type="submit" name="Zatwierdz" value="Zatwierdz!">

    </form>
<?php

    if (!empty($_POST['wiersz']))

    {

    $ilosc = $_POST['wiersz'];
    if (!empty($ilosc))

    {

    $row = 1;

    do
    {
      echo "<tr>";
        $col = 1;
        do
    {
          $fin=$col*$row;

          if ($row==$col) 
    {
            echo "<td class=\"wrr\"> $fin </td>";
}
        else
    {


            echo " <td>$fin</td> ";
}
            $col++;
}
          while ($col <= $ilosc);
          $row++;

          echo "</tr>";
}
          while ($row<=$ilosc);
}
          else
   {

          echo "podaj dane";
}

}
     ?>

  </table>

  </body>
</html>
