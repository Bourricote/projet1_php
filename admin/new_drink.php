// Ce fichier ne sert plus à rien :)

<?php
include_once('../public/header.php');
include_once('create_drink.php');
?>

<section class="action_drink">
    <h2>Ajouter une boisson</h2>
    <form id="new_drink_form" action="new_drink.php" method="post">
        <div>
            <label for="new_drink_name">Nom :</label>
            <input type="text" id="new_drink_name" name="new_drink_name" required>
            <span><?= $newDrinkNameError ?></span>
        </div>
        <div>
            <label for="new_drink_price">Prix :</label>
            <input type="text" id="new_drink_price" name="new_drink_price" required>
            <span><?= $newDrinkPriceError ?></span>
        </div>
        <div>
            <button class="action_button" type="submit">Enregistrer la nouvelle boisson</button>
        </div>
    </form>
</section>