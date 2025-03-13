
<?php

function getRandomColor() {
    $colors = array('#FF0000', '#00FF00', '#0000FF');
    return $colors[array_rand($colors)];
}

?>