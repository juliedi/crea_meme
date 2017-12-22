<?php
//include du model
include("upload.php")
$instance = new meme;
$newmeme = $instance->get_image($id);

if($newmeme) 
{
    $results = $db->query("SELECT * FROM upload WHERE id=$nom_stockage ");
    $ = $results->fetchAll();
    include("views/homeView.php");
}
//else 
//{
//   $results = $db->query("SELECT *");
//    $films = $results->fetchAll();
//    include("views/homeView.php");
//}
    


?>