<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
      $i = 0;
      while($str[$i] != ".") { // Tant que chaque lettre n'est pas égale au point à la fin de $str alors
        echo $str[$i];
        $i = $i+2;
      }

    ?>
  </body>
</html>
