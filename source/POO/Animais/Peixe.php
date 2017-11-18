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
    public function soltarBolha() {
        echo "Soltando Bolha";
    }

}