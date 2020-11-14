<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_POST)) {
        if ($_POST['number'] % 2 == 0) {
          echo "Pair";
        }
        else {
          echo "Impair";
        }
      }
    ?>

  </body>
</html>
