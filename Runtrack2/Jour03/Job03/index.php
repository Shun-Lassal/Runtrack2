<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $str = "I'm sorry Dave I'm afraid I can't do that";
      for($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "I"|| $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y") {
          echo ""; // Affiche rien si on tombe sur les voyelles
        }
        else {
          echo ($str[$i]); // Affiche la lettre actuelle
        }
      }


    ?>
  </body>
</html>
