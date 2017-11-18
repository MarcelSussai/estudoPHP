<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Polimorfismo
  /*    Permite que o mesmo nome represente vários comportamentos diferentes.
   *    
   *    Assinatura do Método
   *    Quantidade e o tipo dos parâmetros
   *    NÃO considera o retorno
   *    
   *    ex
   *    1 e 2 são iguais
   *    3 é diferente de 1 e 2
   *    4 é diferente de 3 e diferente de 1 e 2
   *    5 é diferente de 4 de 3 e de 1 e 2
   * 
   *    1 - public function calcMedia($n1(float),$n2(float)) : float
   *    2 - public function calcMedia($v1(float),$v2(float)) : int
   *    3 - public function calcMedia($bim(int),$n1(float),$n2(float)) : float
   *    4 - public function calcMedia($n1(float),$n2(float),$n3(float),$n4(float)) : float
   *    5 - public function calcMedia($medMin(float),$medMax(float),$sit(string),bim(int)) : string
   * 
   *    Tipos de polimorfismo
   *    1 - Polimorfismo de sobreposição
   *    2 - Polimorfismo de sobrecarga
   * 
   *    Polimorfismo de Sobreposição
   *        Acontece quando substituimos um método de uma superclasse na sua subclasse, usando
   *        a mesma assinatura.
   * 
   *    
   *    Métodos abstratos:
   *    ┌───────────────────┬───────────────────┬───────────────────┬───────────────────┐
   *    │   Mamifero        │   Rétil           │   Peixe           │   Ave             │
   *    ├───────────────────┼───────────────────┼───────────────────┼───────────────────┤
   *    │   Correndo        │   rasteja         │   nadando         │   Voando          │
   *    │   Mamando         │   comendo insetos │   plancton        │   Comendo Frutas  │
   *    │   Som de Mamifero │   som de reptil   │   não faz som     │   Som de ave      │
   *    └───────────────────┴───────────────────┴───────────────────┴───────────────────┘
   * 
   *    ┌───────────────────────────────────────┐
   *    │  [abs]Animal                          │
   *    ├───────────────────────────────────────┤
   *    │    $peso                              │
   *    │    $idade                             │
   *    │    $membros                           │
   *    │    [abs]locomover()                   │
   *    │    [abs]alimentar()                   │
   *    │    [abs]emitirSom()                   │
   *    └───────────────────────────────────────┘
   *    ▲
   *    ║
   *    ║   ┌───────────────────────────────────┐
   *    ╠═══┤   Mamifero                        │
   *    ║   ├───────────────────────────────────┤
   *    ║   │       $corPelo                    │
   *    ║   └───────────────────────────────────┘
   *    ║       ▲
   *    ║       ║
   *    ║       ║   ┌───────────────────────────────────┐
   *    ║       ╠═══┤   Canguru                         │
   *    ║       ║   ├───────────────────────────────────┤
   *    ║       ║   │       usarBolsa()                 │
   *    ║       ║   │       locomover()     saltando    │
   *    ║       ║   └───────────────────────────────────┘
   *    ║       ║
   *    ║       ║   ┌───────────────────────────────────┐
   *    ║       ╚═══┤   Cachorro                        │
   *    ║           ├───────────────────────────────────┤
   *    ║           │       enterrarOsso()              │
   *    ║           │       abanarRabo()                │
   *    ║           └───────────────────────────────────┘
   *    ║
   *    ║   ┌───────────────────────────────────┐
   *    ╠═══┤   Réptil                          │
   *    ║   ├───────────────────────────────────┤
   *    ║   │       $corEscama                  │
   *    ║   └───────────────────────────────────┘
   *    ║       ▲
   *    ║       ║
   *    ║       ║   ┌───────────────────────────────────┐
   *    ║       ╠═══┤   Cobra                           │
   *    ║       ║   ├───────────────────────────────────┤
   *    ║       ║   └───────────────────────────────────┘
   *    ║       ║
   *    ║       ║   ┌───────────────────────────────────┐
   *    ║       ╚═══┤   Tartaruga                       │
   *    ║           ├───────────────────────────────────┤
   *    ║           │       locomover()     devagar     │
   *    ║           └───────────────────────────────────┘
   *    ║
   *    ║   ┌───────────────────────────────────┐
   *    ╠═══┤   Peixe                           │
   *    ║   ├───────────────────────────────────┤
   *    ║   │       $corEscama                  │
   *    ║   │       soltarBolha()               │
   *    ║   └───────────────────────────────────┘
   *    ║       ▲
   *    ║       ║
   *    ║       ║   ┌───────────────────────────────────┐
   *    ║       ╚═══┤   Goldfish                        │
   *    ║           ├───────────────────────────────────┤
   *    ║           └───────────────────────────────────┘
   *    ║
   *    ║   ┌───────────────────────────────────┐
   *    ╚═══┤   Ave                             │
   *        ├───────────────────────────────────┤
   *        │       $corPena                    │
   *        │       fazerNinho()                │
   *        └───────────────────────────────────┘
   *            ▲
   *            ║
   *            ║   ┌───────────────────────────────────┐
   *            ╚═══┤   Arara                           │
   *                ├───────────────────────────────────┤
   *                └───────────────────────────────────┘
   * 
   */
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    require_once 'Animais/Animal.php';
    require_once 'Animais/Mamifero.php';
    require_once 'Animais/Cachorro.php';
    require_once 'Animais/Canguru.php';
    require_once 'Animais/Peixe.php';
    require_once 'Animais/Goldfish.php';
    require_once 'Animais/Ave.php';
    require_once 'Animais/Arara.php';
    require_once 'Animais/Reptil.php';
    require_once 'Animais/Cobra.php';
    require_once 'Animais/Tartaruga.php';
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $m = new Mamifero(32.8,16,4,"Marron");
    echo "se locomove ".$s1;
    $m->locomover();
    echo $s2.$hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $a = new Ave(2.4,6,2,"Branca");
    echo "se locomove ".$s1;
    $a->locomover();
    echo $s2.$hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $r = new Reptil(6,12,4,"Esverdeada");
    echo "se locomove ".$s1;
    $r->locomover();
    echo $s2.$hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $p = new Peixe(3.1,3,0,"Prata");
    echo "se locomove ".$s1;
    $p->locomover();
    echo $s2.$hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $c = new Cachorro(6,12,4,"Preto");
    echo "se locomove ".$s1;
    $c->locomover();
    echo $s2.$pl;
    $c->abanarRabo();
    echo $hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $k = new Canguru(12,8,4,"Bege");
    echo "se locomove ".$s1;
    $k->locomover();
    echo $s2.$pl;
    $k->usarBolsa();
    echo $hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $t = new Tartaruga(6,22,4,"Verde escuro");
    echo "se locomove ".$s1;
    $t->locomover();
    echo $s2.$hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
    $m->emitirSom();
    echo $pl;
    $k->emitirSom();
    echo $pl;
    $c->emitirSom();
    echo $pl;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|