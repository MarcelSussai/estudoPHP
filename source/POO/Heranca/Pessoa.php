<?php

// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Pessoa
    abstract class Pessoa {
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Atributos
        private $nome;
        private $idade;
        private $sexo;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Getters e Setters
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set nome
        public function setNome($v) {
            $this->nome = $v;
        }
  //    Get nome
        public function getNome() {
            return $this->nome;
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
  //    Set sexo
        public function setSexo($v) {
            $this->sexo = $v;
        }
  //    Get sexo
        public function getSexo() {
            return $this->sexo;
        }


  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Construtor
        public function __construct($n, $i, $s) {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Métodos Próprios
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    fazerAniver()
        public final function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
        }

  // └─────────────────────────────────────────────────────────────────────────────────────────────┘


    }
// ────────────────────────────────────────────────────────────────────────────────────────────────┘