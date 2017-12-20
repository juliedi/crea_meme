<?php

function afficher_image($id) {

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=memegenerator;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM upload WHERE id=' . $id);
    echo "<hr>";
    while ($donnees = $reponse->fetch())
    {
        echo $donnees['nom_stockage'] . "<hr>";
    }
    
    echo "<img src='" . $nom_stockage . "'/>"

}


?>