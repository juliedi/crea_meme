<?php
//création d'image et écrire dessus
header ("Content-type: image/jpeg");

$image = imagecreatefromjpeg("hackfimu.jpg");
$size = 45;
$angle = 0;
$x = 80;
$y = 80;
$color = imagecolorallocate($image, 255, 255, 255);/*Couleur de la police*/
$font = "Rubik-Bold.ttf";//la notice préconise de ne pas mettre le nom de l'extension ".ttf" mais ne fonctionne pas sans l'ajouter
$text = "C'est quand que ça s'arrête?";

putenv('GDFONTPATH=' . realpath('.'));

$text1 = imagettftext($image, $size, $angle, $x, $y, $color, $font, $text);
imagejpeg($image);
?>

