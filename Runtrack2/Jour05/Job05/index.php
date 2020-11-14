<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


      function occurences($stro, $charo) {
        $stro = strtolower($stro);
        $stro = str_split($stro);
        $i = 0;
        foreach ($stro as $lchar) {
          if($lchar == $charo){
            $i++;
          }
        }
        return($i);
      }

      $str = "LaPlateforme c'est cool mais je prefere mon lit";
      $char = "o";

      echo (occurences($str,$char) . " lettres " . $char);

    ?>
  </body>
</html>
