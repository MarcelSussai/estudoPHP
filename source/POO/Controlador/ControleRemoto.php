<?php

// ────────────────────────────────────────────────────────────────────────────────────────────────┐
// Classe ControleRemoto
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    requerindo controlador (interface)
    require_once 'controlador.php';
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    ControleRemoto Atributos    {
  /*  Iniciando a classe e criando os atributos    
   */
    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Construtor
        public function __construct(){
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }
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

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Métodos Criados
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Ligar()
        public function ligar() {
            $this->setLigado(true);
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    desligar()
        public function desligar() {
            $this->setLigado(false);
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    abrirMenu()
        public function abrirMenu() {
            echo "Está ligado?: ";
            echo ($this->getLigado())?"SIM":"NÃO";
            echo "<br>\n"."Está Tocando?: ";
            echo ($this->getTocando())?"SIM":"NÃO";
            echo "<br>\n";
            echo "Volume: ".$this->getVolume()."<br>\n";
            for ($i=1; $i <= $this->getVolume(); $i+=10) { 
                // echo "█";
                // echo "╬";
                // echo "■";
                echo "●";
            }
            echo "\n<hr>\n";
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    fecharMenu()
        public function fecharMenu() {
            echo "fechando menu ...";
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    maisVolume()
        public function maisVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 10);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    menosVolume()
        public function menosVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 10);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    ligarMudo()
        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume()>0) {
                $this->setVolume(0);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    desligarMudo()
        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume()==0) {
                $this->setVolume(50);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    play()
        public function play() {
            if ($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    pause()
        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->getTocando(false);
            }
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

    }
// ────────────────────────────────────────────────────────────────────────────────────────────────┘
?>
