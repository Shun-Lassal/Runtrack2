<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $str = "Les choses que l'on possede finissent par nous posseder";
      $splitStr = str_split($str);

      $reservedArray = array_reverse($splitStr);
      foreach ($reservedArray as $strValue) {
        echo ($strValue);
      }
    ?>
  </body>
</html>
