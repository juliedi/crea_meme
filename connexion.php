<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=memegenerator;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$nom_initial = basename($_FILES["fileToUpload"]["name"]);
$nom_stockage = $nom;


$req = $bdd->query("INSERT INTO upload(nom_stockage, nom_initial, description) VALUES('$nom_stockage', '$nom_initial', '$description')");

$lii = $bdd->lastInsertId();

$id = $lii;
?>