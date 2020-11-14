<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      for($i=0; $i < 1338; $i++) {
        if ($i == 26 | $i == 37 | $i == 88 | $i == 1111 | $i == 1233) {
          echo ("");
        }
        else {
          echo ($i . "<br/>");
        }
      }

    ?>

  </body>
</html>
