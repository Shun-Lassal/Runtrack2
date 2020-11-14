<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      if(isset($_POST['prenom'])){
        setcookie("prenom", $_POST['prenom'], time()+3600);
        echo "Bonjour ".$_POST['prenom']." !";
        echo "<form action='index.php' method='post'> <input type='submit' name='deco' value='Deconnexion'> </form>";
      }

      if(isset($_POST['deco'])){
        setcookie("prenom","");
        echo "<form action='index.php' method='post'> <input type='text' name='prenom' value=''> <input type='submit' name='submit' value='Connexion'> </form>";
      }



    ?>

  </body>
</html>
