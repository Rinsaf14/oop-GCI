<?php
// frog.php
require_once 'animal.php';

class Frog extends Animal {

    // Override jumlah kaki menjadi 4 (default dari Animal)
    public $legs = 4;

    // Method tambahan untuk melompat
    public function jump() {
        echo "Hop Hop\n";
    }
}
?>
