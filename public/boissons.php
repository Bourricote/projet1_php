<?php

echo '<div class="drinks">';
foreach ($drinks as $drink) {
    echo '<div class="drink">';
    echo '<h4 class="drink_name">' . $drink['name'] . '</h4>';
    echo '<p>' . $drink['price'] . '</p>';
    echo '</div>';
}
echo '</div>';
