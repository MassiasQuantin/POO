<?php

require __DIR__ . '/../src/Animal.php';

$animal1 = new Animal();
$animal2 = new Animal();
$animal3 = new Animal();

$animals = [$animal1, $animal2, $animal3];

foreach ($animals as $animal) {
    var_dump($animal);
}

require 'view.php';
?>
