<?php
require_once 'Mamifero.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Canguru
class Cachorro extends Mamifero {
    public function enterrarOsso() {
        echo "Enterrando Osso";
    }
    public function abanarRabo() {
        echo "Abanando o rabo";
    }
}