<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    protected $corPelo;
    protected function getCorPelo(){
        return $this->corPelo;
    }
    protected function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
    public function __construct($peso,$idade,$membros,$corPelo){
        $this->setCorPelo($corPelo);
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
    }
    public function emitirSom(): string{
        return "Som de Mamífero!";
    }
}