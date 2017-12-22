<?php
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=memegenerator;charset=utf8', "root", "");
}
catch (PDOException $e) 
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

//$BASE_URL = "http://localhost/BddMVC/";

if (!isset($_GET['route']) || empty($_GET['route']))
{
   $route = 'home';
}

else {
   $route = $_GET['route'];
}    

if (empty($route)) {

}

switch ($route) {
   case 'home':
       include("homeController.php");
       break;

    case 'meme':
       include("views/memeView.php");
       break;

   default:
       include("controllers/".$route."Controller.php");
       break;
}
?>