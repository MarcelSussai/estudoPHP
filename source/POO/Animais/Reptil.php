<?php
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;
    public function setCorEscama($v) {
        $this->corEscama = $v;
    }
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function __construct($peso,$idade,$membros,$corEscama){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorEscama($corEscama);
    }
    public function locomover() {
        echo "Rastejando";
    }
    public function alimentar() {
        echo "Comendo Insetos";
    }
    public function emitirSom() {
        echo "Som de Réptil";
    }
}