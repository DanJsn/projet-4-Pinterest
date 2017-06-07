<?php

/*
if ( !empty($_FILES) ) {
  $image_name = $_FILES["new_image"]["name"];

  $type = $_FILES ["new_image"]["type"];
  $image_tmp_name = $_FILES ["new_image"] ["tmp_name"];
  $image_size = $_FILES ["new_image"]["error"];
*/
/*
  url relatif "./images/"
  url relatif "images/"
  url absolue "/images/"
*/

/*$tableau_two_dimention = array(
  "new_image" => array(
    "premier"=>"jayce junior",
    "troiseme"=>"marcel",
    "deuxieme"=>"link"
  ),
  */

/*if ( !empty ($_FILES) ) {
  $message = "_FILES EST REMPLI";

  $image_name = $_FILES ["new_image"]["name"];//drone_presentation_fi
  $image_type = $_FILES ["new_image"]["type"]; //  image/jpeg
  $image_tmp_name = $_FILES ["new_image"]["tmp_name"]; //nom temporaire
  $image_size = $_FILES ["new_image"]["size"]; // taille temporaire
  $image_error = $_FILES ["new_image"]["error"];// erreur

}
*/

if (!empty($_FILES) ){
    $message = "_FILES EST REMPLI";

    $image_name = $_FILES["new_image"]["name"];
    $image_top_name = $_FILES ["new_image"]["top_name"]; // nom temporaire

    $target_folder = "images";
    $image_path = $target_folder . "/" . $image_name;
    $isFileUploaded = move_uploaded_file($image_top_name, $image_path);

    if ($isFileUploaded) {
      echo "Super le ficher est uploadé";
    } else {
      echo "Oh la la quelque chose s'est mal passé";
    }

}

  $target_folder= "img/";
  $image_path = $target_folder . $image_name;

  //déplace l'image du dossier temporaire vers sa nouvelle adresse
  move_uploaded_file ($tmp_name, $image_path);

  print_r($_FILES);

  $_FILES ["new_image"]["name"]

//      }
 ?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Pinterest</title>
  </head>
  <body>
    <h1>Pinterest</h1>
    <form method="files" enctype="multipart/form-data">
      Select image to upload
      <input type="file" name="new_image" >
      <br>
      <button type="submit"> Envoyer l'image </button>
    </form>




    </body>
</html>
