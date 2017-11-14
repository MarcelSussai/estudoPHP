<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
// Classe ContaBanco
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
    /*  Diagrama de classe ContaBanco
     *          Diagrama de Classe
     *  ┌-=================================-┐
     *  |   ContaBanco                      |
     *  |-=================================-|
     *  |  (+)  numConta                    |
     *  |  (#)  tipo                        |
     *  |  (-)  dono                        |
     *  |  (-)  saldo                       |
     *  |  (-)  status                      |
     *  |-=================================-|
     *  |  (+)  abrirConta()                |
     *  |  (+)  fecharConta()               |
     *  |  (+)  depositar()                 |
     *  |  (+)  sacar()                     |
     *  |  (+)  pagarMensal()               |
     *  └-=================================-┘
     */
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Inicio classe
    class ContaBanco {
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  // |▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬|
  //    Set numConta
        public function setNumConta($v) {
            $this->numConta = $v;
        }
  //    Get numConta
        public function getNumConta() {
            return $this->numConta;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set tipo
        public function setTipo($v) {
            $this->tipo = $v;
        }
  //    Get tipo
        public function getTipo() {
            return $this->tipo;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set dono
        public function setDono($v) {
            $this->dono = $v;
        }
  //    Get dono
        public function getDono() {
            return $this->dono;
        }

  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set saldo
        public function setSaldo($v) {
            $this->saldo = $v;
        }
  //    Get saldo
        public function getSaldo() {
            return $this->saldo;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set status
        public function setStatus($v) {
            $this->status = $v;
        }
  //    Get status
        public function getStatus() {
            return $this->status;
        }
  // |▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬|
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Construtor
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "Sucesso!";
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    abrirConta($tipo)
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } else if ($t == "CP") {
                $this->setSaldo(150);
            } else {
                echo "ERRO | Tipo de conta inválida! somente < CC > ou < CP >";
                $this->setStatus(false);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    fecharConta()
        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "Conta com dinheiro! retirar o dinheiro antes de fechar a conta!";
            } else if ($this->getSaldo() < 0) {
                echo "Conta em débito! favor quitar o débito antes de encerrar conta!";
            } else {
                $this->setStatus(false);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    depositar($v)
        public function depositar($v) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
            } else {
                echo "Conta fechada! | impossível depositar";
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    sacar($v)
        public function sacar($v) {
            if ($this->getStatus()) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                } else {
                    echo "Saldo insuficiente!";
                }
            } else {
                echo "Conta fechada! | impossível sacar";
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    pagarMensal()
        public function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $v = 16;
            } else if ($this->getTipo() == "CP") {
                $v = 32;
            }
            if ($this->getStatus()) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                } else {
                    echo "Saldo insuficiente!";
                }
            } else {
                echo "Conta fechada! | impossível pagar";
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|



    }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
// ────────────────────────────────────────────────────────────────────────────────────────────────┘
?>