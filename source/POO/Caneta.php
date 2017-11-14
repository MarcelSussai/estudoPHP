<?php
// -Classe caneta-----------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Criando a classe                                          |
    class Caneta {
    // |--------------------------------------------------------------|
    // | Criando os atributos                                         |
        private $modelo;
        private $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
    // |--------------------------------------------------------------|
    // |                       Getters e Setters                      |
    // |--------------------------------------------------------------|
    // | modelo                                                       |
    // |    Getter                                                    |
        public function getModelo() {
            return $this->modelo;
        }
    // |    Setter                                                    |
        public function setModelo($m) {
            $this->modelo = $m;
        }
    // |--------------------------------------------------------------|
    // | cor                                                          |
    // |    Getter                                                    |
        public function getCor() {
            return $this->cor;
        }
    // |    Setter                                                    |
        public function setCor($c) {
            $this->cor = $c;
        }
    // |--------------------------------------------------------------|
    // | ponta                                                        |
    // |    Getter                                                    |
        public function getPonta() {
            return $this->ponta;
        }
    // |    Setter                                                    |
        public function setPonta($p) {
            $this->ponta = $p;
        }
    // |--------------------------------------------------------------|
    // | carga                                                        |
    // |    Getter                                                    |
        public function getCarga() {
            return $this->carga;
        }
    // |    Setter                                                    |
        public function setCarga($c) {
            $this->carga = $c;
        }
    // |--------------------------------------------------------------|
    // | tampada                                                      |
    // |    Getter                                                    |
        public function getTampada() {
            return $this->tampada;
        }
    // |    Setter                                                    |
        public function setTampada($t) {
            $this->tampada = $t;
        }
    // |--------------------------------------------------------------|
    // | Construtor                                                   |
        function __construct($m, $p, $c = "azul") {
            $this->setCor($c);
            $this->setModelo($m);
            $this->setPonta($p);
            $this->tampar();
        }

    // |--------------------------------------------------------------|
    // |    Métodos Criados                                           |
    // |--------------------------------------------------------------|
    // | escrever($txt)                                               |
        public function escrever($txt) {
            if ($this->getTampada() == true) {
                return "Caneta tampada, destampe-a para usar ";
            } else {
                return "<strong><i>".$txt."</i></strong>";
            }
        }
    // |--------------------------------------------------------------|
    // | rabiscar()                                                   |
        public function rabiscar($nv) {
            if ($this->getTampada()) {
                return "Caneta tampada, destampe-a para usar ";
            } else {
                echo "<strong><i>";
                for ($i=1; $i <= $nv; $i++) { 
                    echo "_";
                }
                echo "</i></strong>";
            }
        }
    // |--------------------------------------------------------------|
    // | tampar()                                                     |
        public function tampar() {
            $this->setTampada(true);
        }
    // |--------------------------------------------------------------|
    // | destampar()                                                  |
        public function destampar() {
            $this->setTampada(false);
        }
    // |--------------------------------------------------------------|
}

?>