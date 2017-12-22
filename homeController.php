<?php
//include du model
include("afficher_image.php");
$vue = new picture;
$meme = $vue->get_image(1);

print_r($meme);

include("views/homeView.php");

// if($page) 
// {
//     $results = $bdd->query("SELECT * FROM upload WHERE id=$nom_initial ");
//     $donnees = $results->fetchAll();
//     include("views/homeView.php");
// }
//else 
//{
 //   $results = $db->query("SELECT *");
//    $films = $results->fetchAll();
//    include("views/homeView.php");
//}

?>