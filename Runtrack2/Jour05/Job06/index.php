<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function leetspeak($str){
        $str = strtolower($str);
        $str = str_split($str);
        $new_str = [];

        foreach ($str as $letter) {
          switch ($letter) {
            case 'a':
              array_push($new_str, '4');
                break;
            case 'b':
              array_push($new_str, '8');
                break;
            case 'e':
              array_push($new_str, '3');
                break;
            case 'g':
              array_push($new_str, '6');
                break;
            case 'l':
              array_push($new_str, '1');
                break;
            case 's':
              array_push($new_str, '5');
                break;
            case 't':
              array_push($new_str, '7');
                break;
            default:
              array_push($new_str, $letter);
                break;
            }
          }
          return implode($new_str);
        }
      echo leetspeak('Bonjour LaPlateforme est ouverte cette semaine');
    ?>
  </body>
</html>
