<?php
require_once 'Pessoa.php';
class Usuario extends Pessoa {
    private $login;
    private $totAssistido;

    public function setLogin($v) {
        $this->login = $v;
    }
    public function getLogin() {
        return $this->login;
    }

    public function setTotAssistido($v) {
        $this->totAssistido = $v;
    }
    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function __construct($nome,$idade,$sexo,$login) {
        parent::__construct($nome,$idade,$sexo);
        $this->setTotAssistido(0);
        $this->setLogin($login);
    }


    public function viuMaisUm() {


    }


}