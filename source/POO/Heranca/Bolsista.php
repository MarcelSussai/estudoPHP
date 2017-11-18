<?php
require_once 'Aluno.php';
require_once './var_util.php';
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
        public function __construct($nome,$idade,$sexo,$curso,$mat){
            $this->setNome($nome);
            $this->setMat($mat);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setCurso($curso);
        }

        public function renovarBolsa() {
            global $hr, $s1,$s2;
            echo "Renovada Bolsa de ".$s1.$this->getNome().$s2.$hr;
        }

        public function pagarMensalidade(){
            global $hr, $s1,$s2;
            echo $s1.$this->getNome().$s2.' é bolsista! então paga com desconto!'.$hr;
        }
    } 