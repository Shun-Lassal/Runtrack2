<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="text" name="prenom">
      <input type="submit" name="submit" value="Ok">
      <input type="submit" name="reset" value="Reset">
    </form>

    <?php
      if (isset($_POST['prenom'])) {
        $_SESSION['prenoms'] = $_SESSION['prenoms'] . " " . $_POST['prenom'];

      }

      if(isset($_POST['reset'])){
        $_SESSION['prenoms']="";
      }

      foreach ($_SESSION as $prenom) {
        echo $prenom." <br/>";
      }


    ?>
  </body>
</html>
