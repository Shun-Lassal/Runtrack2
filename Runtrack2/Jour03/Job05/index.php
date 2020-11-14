<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $str = "On n'est pas meilleur quand on le croit mais quand on le sait";
      $splitStr = str_split($str);

      $dic = array('consonnes' => array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"),
      'voyelles' => array("a","e","i","o","u","y"));

      $nbrConsonnes = 0;
      $nbrVoyelles = 0;

      foreach ($splitStr as $strChar) {
        foreach ($dic as $typeChar) {
          foreach ($typeChar as $compareChar) {
            if ($compareChar == strtolower($strChar)) {
              if ($typeChar[0] == "b") {
                $nbrConsonnes++;
              }
              elseif ($typeChar[0] == "a") {
                $nbrVoyelles++;
              }
            }
          }
        }
      }

      echo "<table>
      <tr>
        <th>Consonnes</th>
        <th>Voyelles</th>
      </tr>
      <tr>
        <td> il y a ". $nbrConsonnes ." consonnes</td>
        <td> il y a ". $nbrVoyelles ." voyelles</td>
      </tr>
      </table>";
    ?>
  </body>
</html>
