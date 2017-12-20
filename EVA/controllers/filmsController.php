<?php
include("connection.php");
include("models/Films.php");
include("models/Film.php");

$results = new Films;
$films = $results->getAllFilms();

include("views/filmsView.php");
?>