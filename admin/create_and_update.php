<?php
$newDrinkName = '';
$newDrinkNameError = '';
$newDrinkPrice = '';
$newDrinkPriceError = '';
include_once('../public/header.php');
include_once('../public/nav.php');
include_once('../src/update_drink.php');
?>

<section class="action_drink">
    <h2><?= isset($_GET['update']) ? 'Modifier une boisson' : 'Ajouter une boisson' ?></h2>
    <form id="new_drink_form" action="<?= isset($_GET['update']) ? '../src/update_drink.php' : '../src/create_drink.php' ?>" method="post">
        <input type="hidden" name="id" value="<?= isset($_GET['update']) ? $_GET['update'] : ''; ?>"/>
        <div>
            <label for="new_drink_name">Nom :</label>
            <input type="text" id="new_drink_name" name="new_drink_name" value="<?= $drinkName ?>" required>
            <span><?= $newDrinkNameError ?></span>
        </div>
        <div>
            <label for="new_drink_price">Prix :</label>
            <input type="text" id="new_drink_price" name="new_drink_price" value="<?= $drinkPrice ?>" required>
            <span><?= $newDrinkPriceError ?></span>
        </div>
        <div>
            <button class="action_button" type="submit"><?= isset($_GET['update']) ? 'Modifier la boisson' : 'Ajouter la boisson' ?></button>
        </div>
    </form>
</section>
