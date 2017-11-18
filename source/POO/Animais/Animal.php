<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Animal
    abstract class Animal {
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Atributos
        private $peso;
        private $idade;
        private $membros;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Getters e Setters
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set peso
        public function setPeso($v) {
            $this->peso = $v;
        }
  //    Get peso
        public function getPeso() {
            return $this->peso;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set idade
        public function setIdade($v) {
            $this->idade = $v;
        }
  //    Get idade
        public function getIdade() {
            return $this->idade;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set membros
        public function setMembros($v) {
            $this->membros = $v;
        }
  //    Get membros
        public function getMembros() {
            return $this->membros;
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Métodos Próprios Abstratos
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    locomover()
        public abstract function locomover();
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    alimentar()
        public abstract function alimentar();
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    emitirSom()
        public abstract function emitirSom();
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
  
    }
// ────────────────────────────────────────────────────────────────────────────────────────────────┘