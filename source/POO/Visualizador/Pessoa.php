<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome,$idade,$sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setExperiencia(0);
    } 


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


    protected function ganharExp($experiencia) {
        $this->setExperiencia($this->getExperiencia()+$experiencia);
    }

}