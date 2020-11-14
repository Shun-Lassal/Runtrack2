<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>Argument</th>
        <th>Valeur</th>
      </tr>
      <?php
      if(isset($_POST)) {
        foreach ($_POST as $key => $value) {
          echo ("<tr><td>" . $key . "</td>" . "<td>" . $value . "</td></tr>");
        }
      }
      ?>



    </table>


  </body>
</html>
