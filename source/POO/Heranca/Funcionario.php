<?php
require_once 'Pessoa.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Professor
    class Funcionario extends Pessoa {
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Atributos
        private $setor;
        private $trabalhando;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Getters e Setters
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set setor
        public function setSetor($v) {
            $this->setor = $v;
        }
  //    Get setor
        public function getSetor() {
            return $this->setor;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set trabalhando
        public function setTrabalhando($v) {
            $this->trabalhando = $v;
        }
  //    Get trabalhando
        public function getTrabalhando() {
            return $this->trabalhando;
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Construtor
        public function __construct($nome,$idade,$sexo,$set, $trb) {
            $this->setSetor($set);
            $this->setTrabalhando($trb);
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Métodos Próprios
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    mudarTrabalho()
        public function mudarTrabalho(){
            $this->setTrabalhando(!$this->getTrabalhando());
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘


    }
// ────────────────────────────────────────────────────────────────────────────────────────────────┘