<?php
require_once 'Lutador.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
// Luta
    class Luta {
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Getters e Setters
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set desafiado
        public function setDesafiado($v) {
            $this->desafiado = $v;
        }
  //    Get desafiado
        public function getDesafiado() {
            return $this->desafiado;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set desafiante
        public function setDesafiante($v) {
            $this->desafiante = $v;
        }
  //    Get desafiante
        public function getDesafiante() {
            return $this->desafiante;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set rounds
        public function setRounds($v) {
            $this->rounds = $v;
        }
  //    Get rounds
        public function getRounds() {
            return $this->rounds;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set aprovada
        public function setAprovada($v) {
            $this->aprovada = $v;
        }
  //    Get aprovada
        public function getAprovada() {
            return $this->aprovada;
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Construtor
        public function __construct($l1, $l2) {
            $this->marcarLuta($l1,$l2);
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    marcarLuta()
        public function marcarLuta($l1,$l2) {
            if (($l1->getCategoria() === $l2->getCategoria())&&($l1 != $l2)) {
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            } else {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    lutar()
        public function lutar() {
            $pl = " <br>\n";
            $hr = "\n<hr>\n";
            $s1 = "<strong>";
            $s2 = "</strong>";
            if($this->getAprovada()) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                echo $pl;
                switch($vencedor) {
                    case 0:
                        echo "Empatou!";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                    case 1:
                        echo "O desafiado ".$s1.$this->desafiado->getNome().$s2." Ganhou!";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;
                    case 2:
                        echo "O desafiante ".$s1.$this->desafiante->getNome().$s2." Ganhou!";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                    break;
                }
            } else {
                echo "Luta não aprovada para acontecer!";
            }
            echo $hr;
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘


    }