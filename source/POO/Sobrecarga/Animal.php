<?php
abstract class Animal {
    protected $peso,$idade,$membros;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set peso
    protected function setPeso($v) {
        $this->peso = $v;
    }
  //    Get peso
    protected function getPeso() {
        return $this->peso;
    }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set idade
    protected function setIdade($v) {
        $this->idade = $v;
    }
  //    Get idade
    protected function getIdade() {
        return $this->idade;
    }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set membros
        protected function setMembros($v) {
            $this->membros = $v;
        }
  //    Get membros
        protected function getMembros() {
            return $this->membros;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|

    public abstract function emitirSom();
    
}