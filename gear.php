<?php

if(isset($_POST['create'])){
 $nom=$_POST['nom'];
 $path='D:\Logiciels\wamp64\www\KevinNguma\ACS\Explorateur_de_fichiers\Dossier_1\\'.$nom;
   if(!fopen($path, "w")) {
     echo "Le fichier n'a pas été créer";

   }else {
       echo "Le fichier à été créer";
       header("location: index.php?File_Created");
   }

}

if(isset($_POST['target2'])){
  $target=$_POST['target'];
  $destination='D:\Logiciels\wamp64\www\KevinNguma\ACS\Explorateur_de_fichiers\Dossier_1\Corbeille';
  $path='D:\Logiciels\wamp64\www\KevinNguma\ACS\Explorateur_de_fichiers\Dossier_1\\'.$target;
    if(!move_uploaded_file($path, $destination)){


    }else {
      echo "Fichier déplacer";
      header("Location: index.php?File_not_deleted");
    }
}

//
// $path='D:\Logiciels\wamp64\www\KevinNguma\ACS\Explorateur_de_fichiers\Dossier_1';
//
// if(!is_dir($path)){
//   mkdir()
// }

?>
