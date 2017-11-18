<?php
require_once 'Lobo.php';
class Cachorro extends Lobo {
    public function emitirSom() : string{
        return "Au Au Au!";
    }
    public function __construct($peso,$idade,$membros,$corPelo){
        $this->setCorPelo($corPelo);
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
    }
}