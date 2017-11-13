<?php
// -Classe caneta-----------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Criando a classe                                          |
    class Caneta {
        // Criando os atributos                                       |
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
        // Criando os métodos                                         |
        function escrever($txt) {
            if ($this->tampada == true) {
                return "Caneta tampada, destampe-a para usar ";
            } else {
                return "<strong><i>".$txt."</i></strong>";
            }
        }
        function tampar() {
            $this->tampada = true;
        }
        function destampar() {
            $this->tampada = false;            
        }
    }

?>