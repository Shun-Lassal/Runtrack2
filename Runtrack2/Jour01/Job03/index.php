<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $bool;
      $bool = true;
      $str;
      $str = "string";
      $int;
      $int = 5;
      $float;
      $float = 3.14;


      echo ("<table>
      <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
      </tr>
      <tr>
        <td>Boolean</td>
        <td>". gettype($bool) ."</td>
        <td>" . $bool . "</td>
      </tr>
      <tr>
        <td>String</td>
        <td>". gettype($str) ."</td>
        <td>" . $str . "<td>
      </tr>
      <tr>
        <td>Integer</td>
        <td>". gettype($int) ."</td>
        <td>" . $int . "</td>
      </tr>
      <tr>
        <td>Float</td>
        <td>". gettype($float) ."</td>
        <td>" . $float . "</td>
      </tr>");

    ?>

  </body>
</html>
