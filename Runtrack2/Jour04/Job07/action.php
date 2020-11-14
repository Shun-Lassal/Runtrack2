<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $bottom = "_";
    $side = "|";
    $lRoof = "/";
    $rRoof = "\ ";
    $empty = " ";
    $blank = " ";

    function nbrBottom($n) {
      for ($j=0; $j < $n; $j++) {
        $nBottom = $bottom . "_";
      }
    }

    function nbrEmpty($m) {
      for ($j=0; $j < $m; $j++) {
        $nEmpty = $empty . " ";
      }
    }

      if(isset($_GET)) {
        echo ("Longueur : " . $longueur);
        echo ("Largeur : " . $largeur);
        for($i=0; $i <= $largeur; $i++) {
          if($i = 0){
            echo ($lRoof . $rRoof . "<br/>");
            $i++;
          }
          nbrBottom($largeur - 2);
          echo ($lRoof . $nBottom . $rRoof . "<br/>");
        }
        for ($h=0; $h <= $longueur; $h++) {
          nbrEmpty($largeur - 2);
          echo ($side . $nEmpty . $side . "<br/>")
          if ($h == $longueur - 1) {
            nbrBottom($largeur);
            echo ( $side . $nbottom . $side . "<br/>");
          }
        }
      }
    ?>

  </body>
</html>
