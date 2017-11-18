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