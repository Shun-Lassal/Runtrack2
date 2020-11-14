<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      for($i=0; $i < 1338; $i++) {
        if ($i === 42) {
          echo ("<b><u>" . $i . "</u></b> <br/>");
        }
        else {
          echo ($i . " <br/>");
        }
      }

      // Test while

      $i = 0;

      while ($i < 1337) {
        $i++;
        if ($i === 42) {
          echo ("<b><u>" . $i . "</u></b> <br/>");
        }
        else {
          echo ($i . " <br/>");
        }
      }

    ?>


  </body>
</html>
