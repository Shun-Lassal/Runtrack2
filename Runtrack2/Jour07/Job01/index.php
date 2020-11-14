<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="get">
      <input type="submit" name="reset" value="Reset">
    </form>

    <?php


    if(isset($_GET['reset'])){
      $_SESSION['nbVisites']=0;
    }

    if(!isset($_SESSION['nbVisites'])){
      $_SESSION['nbVisites']=1;
    }
    else {
      $_SESSION['nbVisites']++;
    }

    echo "Page vu ".$_SESSION['nbVisites']." fois";





    ?>
  </body>
</html>
