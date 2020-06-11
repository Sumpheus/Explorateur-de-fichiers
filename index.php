<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href='style.css' rel="stylesheet"/>
    <title></title>
  </head>
  <body>
<div id='conteneur1'>
<h1>Explorateur Perso PHP</h1>
</div>

<div class='row' id='conteneurphp4'>
  <div class='col-4'>

  <?php

  if(isset($_POST['selected'])){
    $newdir=$_POST['selected'];
    chdir($newdir);
  }


//Total valeurs dossier
  $doss = "";
  function folderSize($doss){
  $count_size = 0;
  $count = 0;
  $dir_array = scandir($doss);
  foreach($dir_array as $key=>$filename){
    if($filename!=".." && $filename!="."){
      if(is_dir($doss."/".$filename)){
          $new_foldersize = foldersize($doss."/".$filename);
          $count_size = $count_size+ $new_foldersize;
        }else if(is_file($doss."/".$filename)){
          $count_size = $count_size + filesize($doss."/".$filename);
          $count++;
      }
   }
 }
return $count_size;
}

echo getcwd() . DIRECTORY_SEPARATOR ;
$dir = getcwd();
$dir_content = scandir($dir);

foreach ($dir_content as $items) {

  if (is_dir(realpath($items))){
  echo '<form method="POST">';
  echo '<input type="hidden" name="selected"  value="'  .realpath($items).  '">';
  echo '<a href="' .realpath($items).  '">' .$items;
  echo '<button type="submit">' .$items;
  echo '</button>';
  echo "</a>";
  echo '</form>';

}else {
  echo "$items<br>";
}
}


?>

<div class='' id='contenue'>

<form action="test.php" method="post">
  <input type='text' name='nom' placeholder="Fichier">
  <button type='submit' name='create'> Créer un fichier</button>

  <input type='text' name='ndir' placeholder='Dossier'>
  <button type='submit' name='ndirbutton'>Créer Dossier</button>

  <input type='text' name='target' placeholder='Supprimer fichier'>
  <button type='submit' name='target2'>Supprimer fichier</button>

  <input type='submit' name='targetdoss' placeholder="Supprimer dossier">
  <button type='submit' name='targetdoss2'>Supprimer dossier</button>
</form>


<!-- <form action='creer_fichier.php' method='POST'>
    <button class="buttontest" type="submit" name="submit">Créer un fichier</button>
</form>

<form action='creer.php' method='POST'>
    <button class='buttontest' type='submit' name='submit'>Créer un dossier</button>
</form>

<form action='effacer.php' method='POST'>
    <button class='buttontest' type='submit' name='submit'>Supprimer un fichier</button>
</form>

<form action='effacer_dossier.php' method='POST'>
    <button class='buttontest' type='submit' name='submit'>Supprimer un dossier</button>
</form> -->

    </div>
  </div>
</div>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
