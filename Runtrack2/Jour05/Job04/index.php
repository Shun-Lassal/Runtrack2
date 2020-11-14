<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function calcule($a,$b,$op) {
            switch ($op) {
                case '/':
                  return $a / $b;
                case '+':
                  return $a + $b;
                case '*':
                  return $a * $b;
                case '-':
                  return $a - $b;
                  case '%':
                  return $a % $b;
                default:
                  return ("Veuillez rentrez un opérateur valide");
                  break;
              }
      }

      echo calcule(1651,8918,'+');
      echo '<br>';
      echo calcule(4,8,'/');
      echo '<br>';
      echo calcule(2,6,'*');
      echo '<br>';
      echo calcule(150,16,'-');
      echo '<br>';
      echo calcule(2,50,'%');
    ?>
  </body>
</html>
