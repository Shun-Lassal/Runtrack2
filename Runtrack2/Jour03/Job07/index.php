<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $splitedStr = str_split($str);

        $reverseStr = "";

        for($i = (count($splitedStr) - 1); $i >= 0; $i--){
            if($i == (count($splitedStr) - 1)){
                $reverseStr = $splitedStr[0];
            } else {
                $reverseStr = $splitedStr[$i + 1] . $reverseStr;
            }
        }
        echo($reverseStr);
    ?>
  </body>
</html>
