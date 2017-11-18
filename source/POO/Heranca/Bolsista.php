<?php
require_once 'Aluno.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Bolsista
    class Bolsista extends Aluno {
        private $bolsa;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set bolsa
        public function setBolsa($v) {
            $this->bolsa = $v;
        }
  //    Get bolsa
        public function getBolsa() {
            return $this->bolsa;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|

        public function renovarBolsa() {

        }

        public function pagarMensalidade() {
            
        }
    } 