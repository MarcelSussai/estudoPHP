<?php
require_once 'Mamifero.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Canguru
class Canguru extends Mamifero {
    public function usarBolsa() {
        echo "Usando a bolsa";
    }
    public function locomover() {
        echo "Saltando";
    }
}
