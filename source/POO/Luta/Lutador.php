<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Iniciando a Classe Lutador:
    class Lutador {
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  /*    Criando os Atributos
   */
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura, $peso;
        private $categoria;
        private $vitorias, $derrotas, $empates;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Getters e Setters
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set nome
        public function setNome($v) {
            $this->nome = $v;
        }
  //    Get nome
        public function getNome() {
            return $this->nome;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set nacionalidade
        public function setNacionalidade($v) {
            $this->nacionalidade = $v;
        }
  //    Get nacionalidade
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set idade
        public function setIdade($v) {
            $this->idade = $v;
        }
  //    Get idade
        public function getIdade() {
            return $this->idade;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set altura
        public function setAltura($v) {
            $this->altura = $v;
        }
  //    Get altura
        public function getAltura() {
            return $this->altura;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set peso
        public function setPeso($v) {
            $this->peso = $v;
            $this->setCategoria();
        }
  //    Get peso
        public function getPeso() {
            return $this->peso;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set categoria
        private function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Inválido";
            } else if ($this->getPeso() <= 70.3) {
                $this->categoria = "Leve";
            } else if ($this->getPeso() <= 83.9) {
                $this->categoria = "Médio";
            } else if ($this->getPeso() <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "ForaDoPadrão";
            }

        }
  //    Get categoria
        public function getCategoria() {
            return $this->categoria;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set vitorias
        public function setVitorias($v) {
            $this->vitorias = $v;
        }
  //    Get vitorias
        public function getVitorias() {
            return $this->vitorias;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set derrotas
        public function setDerrotas($v) {
            $this->derrotas = $v;
        }
  //    Get derrotas
        public function getDerrotas() {
            return $this->derrotas;
        }
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Set empates
        public function setEmpates($v) {
            $this->empates = $v;
        }
  //    Get empates
        public function getEmpates() {
            return $this->empates;
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  /*    Método Construtor
   *    $nom = nome, $nac = nacionalidade, $ida = idade, $alt = altura, $pes = peso,
   *    $vit = vitorias, $der = derrotas, $emp = empates
   */
        public function __construct($nom, $nac, $ida, $alt, $pes, $vit, $der, $emp) {
            $this->setNome($nom);
            $this->setNacionalidade($nac);
            $this->setIdade($ida);
            $this->setAltura($alt);
            $this->setPeso($pes);
            $this->setVitorias($vit);
            $this->setDerrotas($der);
            $this->setEmpates($emp);
        }
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Métodos Criados
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Método apresentar()
   */
        public function apresentar() {
          //───────────────────────────────────────────────────────────────────────────────────────┐
            $pl = "<br>\n";
            $f1 = "<strong>";
            $f2 = "</strong>";
            $lin = $pl."──────────────────────────────────────────────────────────".$pl;
            $lin .= $f1."Lutador: ".$f2.$this->getNome().$pl;
            $lin .= $f1."Origem: ".$f2.$this->getNacionalidade().$pl;
            $lin .= $f1."Idade: ".$f2.$this->getIdade().$pl;
            $lin .= $f1."Altura: ".$f2.$this->getAltura().$pl;
            $lin .= $f1."Pesando: ".$f2.$this->getPeso()." Kg".$pl;
            $lin .= $f1."Ganhou: ".$f2.$this->getVitorias().$pl;
            $lin .= $f1."Perdeu: ".$f2.$this->getDerrotas().$pl;
            $lin .= $f1."Empatou: ".$f2.$this->getEmpates().$pl;
          // └─────────────────────────────────────────────────────────────────────────────────────┘
            echo $lin;
        }

  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Método estado()
   */
        public function estado() {
            $pl = "<br>\n";
            $f1 = "<strong>";
            $f2 = "</strong>";
            $lin = $pl."──────────────────────────────────────────────────────────".$pl;
            $lin .= $f1.$this->getNome().$f2." é um peso "
                    .$f1.$this->getCategoria().$f2." e já ganhou "
                    .$f1.$this->getVitorias().$f2." vezes, perdeu "
                    .$f1.$this->getDerrotas().$f2." vezes e empatou "
                    .$f1.$this->getEmpates().$f2;
            echo $lin;
        } 

  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Método ganharLuta()
   */
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias()+1);
        }

  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Método perderLuta()
   */
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas()+1);
        }

  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Método empatarLuta()
   */
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates()+1);
        }




  // └─────────────────────────────────────────────────────────────────────────────────────────────┘


    }
    
// ────────────────────────────────────────────────────────────────────────────────────────────────┘