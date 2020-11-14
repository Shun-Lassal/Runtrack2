<?php
  if(isset($_GET)) {
    $i = 0;
    foreach ($_GET as $key => $value) {
      echo ($key . " " . $value . "<br/>");
      $i++;
    }
    echo ($i . " arguments GET");
  }





 ?>
