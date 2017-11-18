<?php
require_once 'Reptil.php';
class Tartaruga extends Reptil {
    
    public function locomover() {
        echo "Andando devagar";
    }
    public function __construct($peso,$idade,$membros,$corEscama){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorEscama($corEscama);
    }
}