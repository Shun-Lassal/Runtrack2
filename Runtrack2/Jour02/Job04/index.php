<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      for ($i=1; $i < 101; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
          echo "FizzBuzz<br/>";
        }
        elseif ($i % 5 == 0) {
          echo "Buzz<br/>";
        }
        elseif ($i % 3 == 0) {
          echo "Fizz<br/>";
        }
        else {
          echo ($i . "<br/>");
        }
      }




    ?>
  </body>
</html>
