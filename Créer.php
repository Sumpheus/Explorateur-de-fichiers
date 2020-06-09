<?php
  $path = "D:\Logiciels\wamp64\www\KevinNguma\ACS\Explorateur_de_fichiers";
      if(!mkdir($path)) {
        echo "Echec, dossier non créer !";
        header("Location: index.php?Directory_not_created");
      } else {
          header("Location: index.php?dossier_créer");
          echo "Dossier crée avec succée";
      }

 ?>
