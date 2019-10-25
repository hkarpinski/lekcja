<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="cos.css">
<form method="post">
  Liczba<input type="number" name="liczba">
  <input type="submit" name="button" value="guzik">
</form>
    <title></title>
  </head>
  <body>
    <table>


<?php
    if(!empty($_POST['liczba']))
{
    $suma = 0;
    $row = 1;
    $liczba = $_POST['liczba'];
do
{

  echo "<tr>";
  $col = 1;
do
{
   $wynik=$row*$col;
   if ($row==$col)
{
     echo "<td class=\"wrr\">$wynik</td>";

   }
else if ($row+$col==$liczba+1) {
        echo "<td class=\"wrrr\">$wynik</td>";
  }
  else
  {
     $suma+=$wynik;
  echo "<td>$wynik</td>";
}
  $col++;
}
while ($col <= $liczba);
  $row++;
  echo "</tr>";
}
 while ($row <= $liczba);
}

 ?>
</table>
<?php
echo  $suma;
?>
</body>
</html>
