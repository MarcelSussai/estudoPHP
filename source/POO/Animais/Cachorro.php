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
    public function rosnar(){
        echo "rosnando";
    }

    public function __construct($peso,$idade,$membros,$corPelo){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorPelo($corPelo);
    }
    public function emitirSom() {
        echo "Latindo (AU! AU! AU)";
    }



}