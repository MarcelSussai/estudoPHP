<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Livro
    class Livro implements Publicacao {
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Atributos
        private $titulo;
        private $autor;
        private $totPag;
        private $pagAtual;
        private $aberto;
        private $leitor;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Getters e Setters
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set titulo
        public function setTitulo($v) {
            $this->titulo = $v;
        }
  //    Get titulo
        public function getTitulo() {
            return $this->titulo;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set autor
        public function setAutor($v) {
            $this->autor = $v;
        }
  //    Get autor
        public function getAutor() {
            return $this->autor;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set totPag
        public function setTotPag($v) {
            $this->totPag = $v;
        }
  //    Get totPag
        public function getTotPag() {
            return $this->totPag;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set pagAtual
        public function setPagAtual($v) {
            $this->pagAtual = $v;
        }
  //    Get pagAtual
        public function getPagAtual() {
            return $this->pagAtual;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set aberto
        public function setAberto($v) {
            $this->aberto = $v;
        }
  //    Get aberto
        public function getAberto() {
            return $this->aberto;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set leitor
        public function setLeitor($v) {
            $this->leitor = $v;
        }
  //    Get leitor
        public function getLeitor() {
            return $this->leitor;
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Construtor
        public function __construct($tit, $aut, $tpg, $lei){
            $this->setTitulo($tit);
            $this->setAutor($aut);
            $this->setTotPag($tpg);
            $this->setLeitor($lei);
            $this->setAberto(false);
            $this->setPagAtual(0);
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Métodos Próprios
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    detalhes()
        public function detalhes(){
            $pl = " <br>\n";
            $s1 = "<strong>";
            $s2 = "</strong>";
            $hr = "\n<hr>\n";
            echo "Livro: ".$s1.$this->getTitulo().$s2." escrito por ".$s1.$this->getAutor().$s2.$pl;
            echo "Páginas: ".$s1.$this->getTotPag().$s2.$pl;
            echo "Sendo lido por: ".$s1.$this->leitor->getNome().$s2.$pl;
            echo "Página Atual: ".$s1.$this->getPagAtual().$s2.$hr;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    abrir()
        public function abrir(){
            $this->setAberto(true);
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    fechar()
        public function fechar(){
            $this->setAberto(false);
            
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
  //    folhear($p)
        public function folhear($p){
            if ($p > $this->getTotPag()) {
                $this->setPagAtual(0);
            } else {
                $this->setPagAtual($p);
            }
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    avancarPag()
        public function avancarPag(){
            $this->setPagAtual($this->getPagAtual() + 1);
        }

  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    voltarPag()
        public function voltarPag(){
            $this->setPagAtual($this->getPagAtual() - 1);
        }

  // |─────────────────────────────────────────────────────────────────────────────────────────────|

    }
// ────────────────────────────────────────────────────────────────────────────────────────────────┘