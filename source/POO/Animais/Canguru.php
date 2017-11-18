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
    public function __construct($peso,$idade,$membros,$corPelo){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorPelo($corPelo);
    }
}
