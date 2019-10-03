<?php
$meals = [
    'Entrées' => [
        'Salade César' => [
            'picture' => '../asset/Images/salade.jpg',
            'price' => '5€',
        ],
        'Croquettes de Brie' => [
            'picture' => '../asset/Images/croquettes.jpg',
            'price' => '6€',
        ],
        'Assiette de charcuterie' => [
            'picture' => '../asset/Images/charcuterie.jpg',
            'price' => '8€',
        ],
    ],
    'Plats' => [
        'Hamburger' => [
            'picture' => '../asset/Images/burger.jpg',
            'price' => '10€',
        ],
        'Fish and Chips' => [
            'picture' => '../asset/Images/fish.jpg',
            'price' => '12€',
        ],
        'Lasagnes' => [
            'picture' => '../asset/Images/lasagnes.jpg',
            'price' => '11€',
        ],
    ],
    'Desserts' => [
        'Moelleux au chocolat' => [
            'picture' => '../asset/Images/moelleux.jpg',
            'price' => '6€',
        ],
        'Tiramisu' => [
            'picture' => '../asset/Images/tiramisu.jpg',
            'price' => '7€',
        ],
        'Poire belle Hélène' => [
            'picture' => '../asset/Images/poire.jpg',
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
