<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=films', "root", "");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>