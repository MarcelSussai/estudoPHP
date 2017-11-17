<?php
require_once "./var_util.php";
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
// Diagramas de Classes
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Pessoa
  /*    
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Pessoa                      │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (-) nome                      │
   *    │ (-) idade                     │
   *    │ (-) sexo                      │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) fazerAniver()             │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   *    Pessoa      lê ►        ◊Livro
   * 
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Livro                       │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (-) titulo                    │
   *    │ (-) autor                     │
   *    │ (-) totPag                    │
   *    │ (-) pagAtual                  │
   *    │ (-) aberto                    │
   *    │ (-) leitor                    │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) detalhes()                │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   *        Livro       ►       Publicação
   * 
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │       << Interface >>         │
   *    │   Publicacao                  │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) abrir()                   │
   *    │ (+) fechar()                  │
   *    │ (+) folhear()                 │
   *    │ (+) avancarPag()              │
   *    │ (+) voltarPag()               │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   */
require_once 'Pessoa.php';
require_once 'Livro.php';

$p[0] = new Pessoa("Marcel", 31, "M");
$p[1] = new Pessoa("Gláucia", 28, "F");

$l[0] = new Livro("Deus um delírio","Richard Dawkins", 380, $p[0]);
$l[1] = new Livro("As façanhas de alguém desconhecido", "alguém desconhecido", 400, $p[1]);

mostrarEstado($l[0]);
//mostrarEstado($l[1]);

$l[0]->abrir();
$l[0]->folhear(64);

$l[0]->detalhes();
$l[1]->detalhes();