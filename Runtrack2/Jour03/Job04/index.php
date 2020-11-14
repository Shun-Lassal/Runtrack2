<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $str = "Dans l'espace, personne ne vous entend crier";
      for($i = 0; isset($str[$i]); $i++) {
        echo ($str[$i] . "<br/>");
      }
      echo ("Il y a " . $i . " lettres");

    ?>
  </body>
</html>
