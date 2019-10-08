<?php
// Connexion à la base de données pdo_projet1

require_once('parameters.php');
$pdo = new \PDO (DSN,USER,PASS);

// Création liste de boissons à partir de la base de données

$query = "SELECT * FROM drink";
$statement = $pdo->query($query);
$drinks = $statement->fetchAll(PDO::FETCH_ASSOC);