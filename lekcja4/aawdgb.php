<?php
    $lorem='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    echo $lorem;

    $col = wordwrap($lorem,10,'<br>');
    echo $col,'<hr>';

    //CZYSZczenie zawartosci bufora

    ob_clean();

    ##########

    //usuwanie białych znakówarning  (spacje)

    $name = 'Kasia';
    $name1 = '    Kasia';
    echo 'Długość zmiennej $name',strlen($name),'<br>';//5
    echo 'Długość zmiennej $name1',strlen($name),'<br>';//5

    echo strlen(ltrim($name1));
    echo strlen(rtrim($name1));
    echo strlen(trim($name1));

    //przeszukianie ciagu znaków wszytko po tym

    $adress = 'Poznań, ul.masna, tel. (61) 445-07-00';

    $search = strstr($adress,'tel.');
    echo $search , '<br>';

    //przeszukianie ciagu znaków wszystko do tego

    $adress = 'Poznań, ul.masna, tel. (61) 445-07-00';

    $search = stristr($adress,'tel.',true);
    echo $search , '<br>';

    $mail =strstr('zsl@gmail.com','@',);
    echo $mail,'<br>';//@gmail

    $mail =strstr('zsl@gmail.com',64);
    echo $mail,'<br>';//@gmail

    ############################  ########################

    $ciag1 ='a';
    $ciag2 ='b';

    echo strcmp($ciag1,$ciag2); //-1
    echo strcmp('d','a'); //1
    echo strcmp('d','d'); //0
    echo strcmp('aac','aa'),'<hr>'; //1
    //pozycja

    $pos = strpos ('abcdefg','bc');
    $pos = strpos ('abcadabcdd','ab');
echo $pos;
//sprawdz czy w ciagu o nazwie text1 znajdiije sie ciąg text2

    $text1 = 'abcd';
    $text2 = 'a';

    if (strpos($text1,$text2) == false )
    {
      echo "ciąg $text2 nie został znaleziony w ciągu $text1<hr>";}
          else{
      echo "ciąg $text2  został znaleziony w ciągu $text1<hr>";
  }
//przetwarzanie ciągów znakówarning
$replace = str_replace('zsl','zsk',' j zsl');
echo $replace,'<br>';
//substr

$surname = substr('janusz stolar', 3);
echo $surname,'<br>';//usz stolar


  $surname = substr('janusz stolar', -3);
echo $surname,'<br>';//usz stolar

  $surname = substr('janusz stolar',-6, 5);
echo $surname,'<hr>';//usz stolar
//zmiana polskich znaków

    $login = 'żakol';
    $censore = array('ą', 'ę', 'ś', 'ż','ć', 'ź', 'ó', 'ń','ł');
    $replace = array('a', 'e', 's', 'z','c', 'z', 'o', 'n','l');

    $newLogin = str_ireplace($censore, $replace, $login);

    echo $newLogin,'<hr>'; //zakol
    ob_clean();
/*napisz aplikacje cenzurujące zdanie podane przez
uzytkownika. Uzytkownik podaje dane z formularza
Zmien słowa zsk zsr i zsł na ciąg **##**
wyswietlanne
Dane bez poprawy:
Dane po poprawie:
*/
    echo <<< FORM
    <form method="post">

        <input type="text" name="dane" placeholder="Wpisz zdanie"><br><br>
        <input type="submit" value="Zatwierdź">


    </form>
FORM;

    if(isset($_POST['dane'])) {

      $data = $_POST['dane'];
      //echo $data;

      $censore = array('zse','zsk','zsl');
      $replace = '**###**';
      $correct = str_replace($censore,$replace,$data);


      echo "Dane bez poprawy: $data<br>";
      echo "Dane po poprawie: $correct<br>";
    }
kenon chuj
