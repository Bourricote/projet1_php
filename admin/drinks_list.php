<?php
include_once('../public/header.php');
include_once('../public/nav.php');
include_once('../src/connection.php');

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
            <?php foreach ($drinks as $drink) :?>
                <tr>
                    <td><?= $drink['id']?></td>
                    <td><?= $drink['name']?></td>
                    <td><?= $drink['price']?></td>
                    <td><a href="create_and_update.php?update=<?= $drink['id']?>"><i class="edit-btn fas fa-pencil-alt"></i></a></td>
                    <td><a href="delete.php?delete=<?= $drink['id']?>"><i class="delete-btn far fa-times-circle"></i></a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <a id="add_drink" href="create_and_update.php">Ajouter une boisson</a>
</section>

