<?php

class picture {
    public function get_image($id) {
    global $bdd;
    $reponse = $bdd->query('SELECT * FROM upload WHERE id='.$id);
    $donnees = $reponse->fetch();
    return $donnees;
    }
}
?>