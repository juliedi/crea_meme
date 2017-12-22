<?php

function afficher_miniature($id) {

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=memegenerator;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM upload WHERE id=' . $id);
    //echo "<hr>";
    while ($donnees = $reponse->fetch())
    {
        //echo $donnees['nom_stockage'] . "<hr>";
        $nom_stockage = $donnees['nom_stockage'];
    }
    
    echo "<img src='" . $nom_stockage . "'/>";

}

function afficher_chemin($id) {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=memegenerator;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM upload WHERE id=' . $id);
    while ($donnees = $reponse->fetch())
    {
        //echo $donnees['nom_stockage'] . "<hr>";
        $nom_stockage = $donnees['nom_stockage'];
    }
    echo $nom_stockage;
}
function get_chemin($id) {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=memegenerator;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM upload WHERE id=' . $id);
    while ($donnees = $reponse->fetch())
    {
        //echo $donnees['nom_stockage'] . "<hr>";
        $nom_stockage = $donnees['nom_stockage'];
    }
    return $nom_stockage;
}
?>