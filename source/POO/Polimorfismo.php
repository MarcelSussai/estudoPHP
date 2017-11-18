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