<?php
// On indique la source (quelle est la photo choisie). Il faut aussi enregistrer une copie de la photo:
// c'est cette copie qui sera redimensionnée pour servir de miniature. On la renomme et on
// l'appelle plus bas, dans la dernière fonction "imagepeg".
$source = imagecreatefromjpeg("hackfimu.jpg"); 
$minipic = imagecreatetruecolor(200, 150); // On crée la taille de la miniature

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_minipic = imagesx($minipic);
$hauteur_minipic = imagesy($minipic);

// On crée la miniature (redimensionne la photo)
imagecopyresampled($minipic, $source, 0, 0, 0, 0, $largeur_minipic, $hauteur_minipic, $largeur_source, $hauteur_source);

// On enregistre la miniature
imagejpeg($minipic, "mini_hackfimu.jpg");
?>