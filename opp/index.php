<?php
// index.php
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

// Membuat instance dari class Animal
$sheep = new Animal("shaun");
echo "Name: " . $sheep->get_name() . "\n";
echo "Legs: " . $sheep->get_legs() . "\n";
echo "Cold Blooded: " . $sheep->get_cold_blooded() . "\n\n";

// Membuat instance dari class Frog
$kodok = new Frog("buduk");
echo "Name: " . $kodok->get_name() . "\n";
echo "Legs: " . $kodok->get_legs() . "\n";
echo "Cold Blooded: " . $kodok->get_cold_blooded() . "\n";
$kodok->jump();  // Output: Hop Hop
echo "\n";

// Membuat instance dari class Ape
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->get_name() . "\n";
echo "Legs: " . $sungokong->get_legs() . "\n";
echo "Cold Blooded: " . $sungokong->get_cold_blooded() . "\n";
$sungokong->yell();  // Output: Auooo
?>



