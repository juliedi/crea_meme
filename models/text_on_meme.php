<?php
//création d'image et écrire dessus
header ("Content-type: image/jpeg");

$image = imagecreatefromjpeg("hackfimu.jpg");
$size = 45;
$angle = 0;
$x = 80; //positionne le 1er caractère du texte de droite à gauche
$y = 80;// positionne le 1er caractère du texte en partant du haut
$xx = 500;
$yy = 650;
$color = imagecolorallocate($image, 255, 255, 255);/*Couleur de la police*/
$font = "Rubik-Bold.ttf";//la notice préconise de ne pas mettre le nom de l'extension ".ttf" mais ne fonctionne pas sans l'ajouter
$text1 = "oh yeuuu";
$text2 = "ben alooors";

putenv('GDFONTPATH=' . realpath('.'));

$toptext = imagettftext($image, $size, $angle, $x, $y, $color, $font, $text1);
$bottomtext = imagettftext($image, $size, $angle, $xx, $yy, $color, $font, $text2);
imagejpeg($image);
?>

