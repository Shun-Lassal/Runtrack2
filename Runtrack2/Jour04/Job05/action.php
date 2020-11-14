<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_POST)) {
        if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
          echo "C'est pas ma guerre";
        }
        else {
          echo "Votre pire cauchemard";
        }
      }
    ?>

  </body>
</html>
