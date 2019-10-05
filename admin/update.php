<?php
include_once('../public/header.php');

// Connexion BDD

require_once('../src/connec.php');
$pdo = new \PDO (DSN, USER, PASS);

$drink_name = '';
$drink_price = '';
$newDrinkNameError = '';
$newDrinkPriceError = '';

if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $query = "SELECT * FROM drink WHERE id=$id";
    $statement = $pdo->query($query);
    $infos = $statement->fetchAll(PDO::FETCH_ASSOC);
    $drink_name = $infos[0]['name'];
    $drink_price = $infos[0]['price'];
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
    header("Location: drinks_list.php?message=La boisson a bien été modifiée");
}

?>
<section class="action_drink">
    <h2>Modifier une boisson</h2>

    <form id="update_drink_form" action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>"/>
        <div>
            <label for="new_drink_name">Nom :</label>
            <input type="text" id="new_drink_name" name="new_drink_name" value="<?= $drink_name ?>" required>
            <span><?= $newDrinkNameError ?></span>
        </div>
        <div>
            <label for="new_drink_price">Prix :</label>
            <input type="text" id="new_drink_price" name="new_drink_price" value="<?= $drink_price ?>" required>
            <span><?= $newDrinkPriceError ?></span>
        </div>
        <div>
            <button class="action_button" type="submit">Modifier la boisson</button>
        </div>
    </form>
</section>

