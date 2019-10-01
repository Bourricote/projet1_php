<?php
$meals = [
    'Entrées' => [
        'Salade César' => [
            'picture' => 'Images/salade.jpg',
            'price' => '5€',
        ],
        'Croquettes de Brie' => [
            'picture' => 'Images/croquettes.jpg',
            'price' => '6€',
        ],
        'Assiette de charcuterie' => [
            'picture' => 'Images/charcuterie.jpg',
            'price' => '8€',
        ],
    ],
    'Plats' => [
        'Hamburger' => [
            'picture' => 'Images/burger.jpg',
            'price' => '10€',
        ],
        'Fish and Chips' => [
            'picture' => 'Images/fish.jpg',
            'price' => '12€',
        ],
        'Lasagnes' => [
            'picture' => 'Images/lasagnes.jpg',
            'price' => '11€',
        ],
    ],
    'Desserts' => [
        'Moelleux au chocolat' => [
            'picture' => 'Images/moelleux.jpg',
            'price' => '6€',
        ],
        'Tiramisu' => [
            'picture' => 'Images/tiramisu.jpg',
            'price' => '7€',
        ],
        'Poire belle Hélène' => [
            'picture' => 'Images/poire.jpg',
            'price' => '8€',
        ],
    ],

];

foreach ($meals as $typeCourse => $courses) {
    echo '<h3>' . $typeCourse . '</h3>';
    echo '<div class="type_course">';
    foreach ($courses as $key => $values) {
        echo '<div class="course">';
        echo '<h4 class="course_name">' . $key . '</h4>';
        echo '<img src="' . $values['picture'] . '" alt="img">';
        echo '<span class="price">' . $values['price'] . '</span>';
        echo '</div>';
    }
    echo '</div>';
}
