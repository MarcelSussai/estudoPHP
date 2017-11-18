<?php
require_once 'Mamifero.php';
class Lobo extends Mamifero {
    public function emitirSom(): string {
        return "Auuuuuuuuuuuul!";
    }
    public function __construct($peso,$idade,$membros,$corPelo){
        $this->setCorPelo($corPelo);
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
    }
}