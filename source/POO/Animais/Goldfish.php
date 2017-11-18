<?php
require_once 'Peixe.php';
class Goldfish extends Peixe {
    
    public function __construct($peso,$idade,$membros,$corEscama){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorEscama($corEscama);
    }
}