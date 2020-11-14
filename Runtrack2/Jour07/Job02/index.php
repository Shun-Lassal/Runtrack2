<?php setcookie("nbVisites", 1, time()+3600) ?>
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
      $_COOKIE['nbVisites']=0;
    }

    if(!isset($_COOKIE['nbVisites'])){
      $_COOKIE['nbVisites']=1;
    }
    else {
      $_COOKIE['nbVisites']++;
    }

    foreach ($_COOKIE as $key => $value) {
      echo $key. "<br/>";
    }
    echo "Page vu ".$_COOKIE['nbVisites']." fois";





    ?>
  </body>
</html>
