<?php
require_once('../src/parameters.php');
require_once ('../src/connection.php');

$drinkName = '';
$drinkPrice = '';
$newDrinkNameError = '';
$newDrinkPriceError = '';

if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $query = "SELECT * FROM drink WHERE id=$id";
    $statement = $pdo->query($query);
    $infos = $statement->fetch();
    $drinkName = $infos['name'];
    $drinkPrice = $infos['price'];
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $newDrinkName = trim($_POST['new_drink_name']);
    $newDrinkPrice = trim($_POST['new_drink_price']);

    $query = "UPDATE drink SET name=:name, price=:price WHERE id= $id";
    $statement = $pdo->prepare($query);

    $statement->bindValue(':name', $newDrinkName, \PDO::PARAM_STR);
    $statement->bindValue(':price', $newDrinkPrice, \PDO::PARAM_STR);

    $statement->execute();
    header("Location: ../admin/drinks_list.php?message=La boisson a bien été modifiée");
}