<?php
  if(isset($_POST)) {
    $i = 0;
    foreach ($_POST as $key => $value) {
      echo ($key . " " . $value . "<br/>");
      $i++;
    }
    echo ($i . " arguments POST");
  }





 ?>
