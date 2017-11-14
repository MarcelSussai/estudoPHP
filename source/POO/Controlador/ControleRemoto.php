<?php

// ────────────────────────────────────────────────────────────────────────────────────────────────┐
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    ControleRemoto Atributos
    /*
     *
     */
    class ControleRemoto {
        private $volume;
        private $ligado;
        private $tocando;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

        
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Getters e Seters
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set volume
        public function setVolume($v) {
            $this->volume = $v;
        }
  //    Get volume
        public function getVolume() {
            return $this->volume;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set ligado
        public function setLigado($v) {
            $this->ligado = $v;
        }
  //    Get ligado
        public function getLigado() {
            return $this->ligado;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set tocando
        public function setTocando($v) {
            $this->tocando = $v;
        }
  //    Get tocando
        public function getTocando() {
            return $this->tocando;
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘



    }
?>
