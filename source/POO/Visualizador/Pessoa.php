<?php

class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;


    public function setNome($v) {
        $this->nome = $v;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setIdade($v) {
        $this->idade = $v;
    }
    public function getIdade() {
        return $this->idade;
    }

    public function setSexo($v) {
        $this->sexo = $v;
    }
    public function getSexo() {
        return $this->sexo;
    }

    public function setExperiencia($v) {
        $this->experiencia = $v;
    }
    public function getExperiencia() {
        return $this->experiencia;
    }


    protected function ganharExp() {
        
    }

}