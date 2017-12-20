<?php

class Film {

	public function getActeur($id) {
		global $db;
		$results = $db->query("SELECT * FROM acteurs JOIN a_joue ON acteurs.id=a_joue.id_Acteurs WHERE a_joue.id=$id");        
        return $results->fetchAll();
    }
}
?>