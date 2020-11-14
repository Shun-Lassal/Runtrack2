<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $i=1;
      while ($i <= 100){
        for ($i=1; $i <= 20; $i++) {
          echo ("<i>" . $i . "</i><br/>");
        }
        for ($i=21; $i <= 24; $i++) {
          echo ($i . "<br/>");
        }
        for ($i=25; $i <= 50; $i++) {
          if ($i == 42) {
            echo "LaPlateforme_<br/>";
          }
          else {
            echo ("<u>" . $i . "</u><br/>");
          }
        }
        for ($i=51; $i <=100 ; $i++) {
          echo ($i . "<br/>");
        }
      }
    ?>
  </body>
</html>
