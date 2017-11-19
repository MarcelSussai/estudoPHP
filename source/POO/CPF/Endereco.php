<?php
// Métodos Mágicos
require_once './var_util.php';
class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function setLogradouro($v) {
        $this->logradouro = $v;
    }
    public function getLogradouro() {
        return $this->logradouro;
    }
    public function setNumero($v) {
        $this->numero = $v;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function setCidade($v) {
        $this->cidade = $v;
    }
    public function getCidade() {
        return $this->cidade;
    }

    public function __construct($logra,$numer,$cidad){
        $this->setLogradouro($logra);
        $this->setNumero($numer);
        $this->setCidade($cidad);
    }
    public function __destruct(){
        var_dump("Destruir");
    }
    public function __toString(){
        return $this->getLogradouro().", ".$this->getNumero()." - ".$this->getCidade();
    }
}

$end = new Endereco("Rua Nome De Rua", "246", "Cidade Louca");
mostrarEstado($end);
unset($end);

if (isset($end)){
    echo "Existe".$pl;
    mostrarEstado($end);
} else {
    echo "Não Existe";
}