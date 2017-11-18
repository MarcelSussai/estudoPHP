<?php
require_once 'Animal.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Animal
    class Mamifero extends Animal {
        private $corPelo;
        public function setCorPelo($v) {
            $this->corPelo = $v;
        }
        public function getCorPelo() {
            return $this->corPelo;
        }
        public function __construct($peso,$idade,$membros,$corPelo){
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorPelo($corPelo);
        }
        public function locomover() {
            echo "Correndo";
        }
        public function alimentar() {
            echo "Mamando";
        }
        public function emitirSom() {
            echo "Som de Mamífero";
        }
    } 