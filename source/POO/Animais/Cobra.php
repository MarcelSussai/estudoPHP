<?php
require_once 'Reptil.php';
class Cobra extends Reptil {
    
    public function __construct($peso,$idade,$membros,$corEscama){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorEscama($corEscama);
    }
}