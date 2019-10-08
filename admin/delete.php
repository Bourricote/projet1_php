<?php
include_once('../public/header.php');
include_once('../public/nav.php');
?>

<section class="action_drink">
    <h2>Supprimer une boisson</h2>

    <form action="../src/delete_drink.php" method="post">
        <input type="hidden" name="id" value="<?= isset($_GET['delete']) ? $_GET['delete'] : ''; ?>"/>
        <h3>Etes-vous sûr de vouloir supprimer cette boisson ?</h3>
        <div id="delete_confirm">
            <button type="submit" class="delete_action">Oui</button>
            <a href="../admin/drinks_list.php" class="delete_action">Non</a>
        </div>
    </form>
</section>
