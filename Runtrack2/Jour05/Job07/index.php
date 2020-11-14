<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get" action="index.php">
        <input type="text" name="str">

        <select name="fonction">

        <option>gras</option>
        <option>cesar</option>
        <option>plateforme</option>

        </select>
        <input name="bouton" type="submit">
    </form>

    <?php

      if(isset($_GET["bouton"])){

      }


      function gras($str){
        $majuscule = ["A", "B" ,"C", "D", "E", "F", "G", "H", "I" ,"J" ,"K" ,"L" ,"M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W" ,"X" ,"Y", "Z"];
        for($i = 0; isset($str[$i]);$i++){
          if ($str[$i] == $majuscule([$i]) ){
            echo "<b>" . $str ."</b>";
          }
        }
        return($str);
      }

      function cesar($str, $decalage = 2){
        $newStr = "";
        for($i= 0; isset($str[$i]); $i++){
        $newStr = $str[$i]-$decalage;
        }
        return($newStr);
      }

      function plateforme($str){
        $newStr = "";
        for($i= 0; isset($str[$i]); $i++){
        if($str[$i] = "_"){
            // rajouter str_ a la fin du mot
        }
    }
}



?>
  </body>
</html>
