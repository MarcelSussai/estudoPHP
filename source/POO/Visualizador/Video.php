<?php 
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;


    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function setAvaliacao($avaliacao) {
        $media = 0;
        if ($this->views !=0) {
            $media = ($this->avaliacao + $avaliacao)/$this->views;
        }
        $this->avaliacao = $media;
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
        $this->setCurtidas($this->getCurtidas() + 1);
    }
    public function play() {
        $this->setReproduzindo(true);
    }
    public function pause() {
        $this->setReproduzindo(false);
    }

}