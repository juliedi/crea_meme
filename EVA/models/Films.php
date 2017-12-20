<?php

class Films {

	public function getAllFilms(){
		global $db;		
		$results = $db->query("SELECT * FROM titre");
		return $results->fetchAll();
	}
}
?>