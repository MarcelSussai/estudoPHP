<?php 
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setViews($views) {
        $this->views = $views;
    }
    public function getViews() {
        return $this->views;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function getCurtidas() {
        return $this->Curtidas;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function like() {

    }
    public function play() {

    }
    public function pause() {
        
    }

}