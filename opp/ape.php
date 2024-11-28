<?php
// ape.php
require_once 'animal.php';

class Ape extends Animal {

    // Override jumlah kaki menjadi 2 (karena kera)
    public $legs = 2;

    // Method tambahan untuk berteriak
    public function yell() {
        echo "Auooo\n";
    }
}
?>
