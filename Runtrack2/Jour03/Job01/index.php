<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $array = [200,204,173,98,171,404,459]; // Tableau
      $nbrValeurs = count($array); // Compte les valeurs dans le tableau
      for ($i=0; $i < $nbrValeurs; $i++) { // incremente la ieme valeur du tableau
        if ($array[$i] % 2 == 0) {
          echo ($array[$i] . " est paire<br/>");
        }
        else {
          echo ($array[$i] . " est impaire<br/>");
        }
      }
    ?>
  </body>
</html>
