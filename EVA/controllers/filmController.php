<?php
include("connection.php");
include("models/Films.php");
include("models/Film.php");

$results = new Film;
$titre = $results->getFilm($id);
$realisateur = $results->getRealisateur($id);
$acteur = $results->getActeur($id);
$genre = $results->getGenre($id);


include("views/filmView.php");

?>