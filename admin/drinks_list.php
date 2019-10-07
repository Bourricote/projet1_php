<?php
include_once('../public/header.php');
include_once('../src/functions.php');

$message = '';
if(isset($_GET['message'])){
    $message = $_GET['message'];
}
?>
<section id="drinks_list">

    <h2><?= $message?></h2>
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>Boisson</th>
            <th>Prix</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($drinks as $drink) {
            echo '<tr>';
            echo '<td>' . $drink['id'] . '</td>';
            echo '<td>' . $drink['name'] . '</td>';
            echo '<td>' . $drink['price'] . '</td>';
            echo '<td><a href="update.php?update=' . $drink['id'] . '"><i class="edit-btn fas fa-pencil-alt"></i></a></td>';
            echo '<td><a href="delete.php?delete=' . $drink['id'] . '"><i class="delete-btn far fa-times-circle"></i></a></td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>

    <a id="add_drink" href="create_drink.php">Ajouter une boisson</a>
</section>

