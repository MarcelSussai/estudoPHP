<?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set corPena
    public function setCorPena($v) {
        $this->corPena = $v;
    }
  //    Get corPena
    public function getCorPena() {
        return $this->corPena;
    }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    public function fazerNinho() {
        echo "Construindo Ninho";
    }
    public function locomover() {
        echo "Voando";
    }
    public function alimentar() {
        echo "Comendo Frutas";
    }
    public function emitirSom() {
        echo "Som de Ave";
    }
}