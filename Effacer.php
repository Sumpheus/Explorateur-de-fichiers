<?php
  $path = "D:\Logiciels\wamp64\www\KevinNguma\ACS\Explorateur_de_fichiers\Dossier_2\music\ByeBye.mp3";
    if (!unlink($path)) {
      echo "ça ne marche pas !";
    } else {
        header("Location: index.php?fichier_supprimer");
    }

 ?>
