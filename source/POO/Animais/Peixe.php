<?php
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set corEscama
    public function setCorEscama($v) {
        $this->corEscama = $v;
    }
  //    Get corEscama
    public function getCorEscama() {
        return $this->corEscama;
    }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    public function __construct($peso,$idade,$membros,$corEscama){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorEscama($corEscama);
    }

    public function soltarBolha() {
        echo "Soltando Bolha";
    }
    public function locomover() {
        echo "Nadando";
    }
    public function alimentar() {
        echo "Comendo Planctons";
    }
    public function emitirSom() {
        echo "Som submarino de peixe";
    }

}