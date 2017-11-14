<?php
// -Classe caneta-----------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Criando a classe                                          |
    class Caneta {
    // |--------------------------------------------------------------|
    // | Criando os atributos                                         |
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
    // |--------------------------------------------------------------|
    // |    Criando os métodos                                        |
    // |--------------------------------------------------------------|
    // | escrever($txt)                                               |
        public function escrever($txt) {
            if ($this->tampada == true) {
                return "Caneta tampada, destampe-a para usar ";
            } else {
                return "<strong><i>".$txt."</i></strong>";
            }
        }
    // |--------------------------------------------------------------|
    // | rabiscar()                                                   |
        public function rabiscar($nv) {
            if ($this->tampada) {
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
            $this->tampada = true;
        }
    // |--------------------------------------------------------------|
    // | destampar()                                                  |
        public function destampar() {
            $this->tampada = false;
        }
    // |--------------------------------------------------------------|
}

?>