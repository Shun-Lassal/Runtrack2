<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function bonjour($jour) {
        if ($jour == true) {
          echo "Bonjour";
        }
        elseif ($jour == false) {
          echo "Bonsoir";
        }
      }

      $jour = false;

      bonjour($jour);
    ?>
  </body>
</html>
