<?php
require_once 'Usuario.php';
require_once 'Video.php';

class Visualizacao {
    private $espectador;
    private $filme;
    public function setEspectador($v) {
        $this->espectador = $v;
    }
    public function getEspectador() {
        return $this->espectador;
    }
    public function setFilme($v) {
        $this->filme = $v;
    }
    public function getFilme() {
        return $this->filme;
    }
    public function __construct($espectador,$filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc) {
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        } else if ($porc <= 50) {
            $nova = 5;
        } else if ($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
}