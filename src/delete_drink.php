<?php
require_once('../src/parameters.php');
include_once('../src/connection.php');


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM drink WHERE id=:id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, \PDO::PARAM_INT);
    $statement->execute();
    header("Location: ../admin/drinks_list.php?message=La boisson a bien été supprimée");
}
