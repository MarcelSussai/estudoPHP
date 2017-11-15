<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  /*  Pilares POO - EHP
   *
   *    Encapsulamento
   *        proteção
   *        padrão
   *        tornar mudanças invisiveis
   *        Facilitar a reutilização de código
   *        reduzir efeitos colaterais
   *
   *    Herança
   *    Polimorfismo
   *    Abstração (nem todas as teorias da POO consideram Abstração um pilar)
   */
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  /*    Interfaces
   *    Diagrama de Interface                           
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    |               << interface >>                 |
   *    |                 Controlador                   |
   *    |▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬|
   *    | (+) ligar()                                   |
   *    | (+) desligar()                                |
   *    | (+) abrirMenu()                               |
   *    | (+) fecharMenu()                              |
   *    | (+) maisVolume()                              |
   *    | (+) menosVolume()                             |
   *    | (+) ligarMudo()                               |
   *    | (+) desligarMudo()                            |
   *    | (+) play()                                    |
   *    | (+) pause()                                   |
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    |              ControleRemoto                   |
   *    |▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬|
   *    | (-) volume                                    |
   *    | (-) ligado                                    |
   *    | (-) tocando                                   |
   *    |▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬|
   *    | (+) ligar()                                   |
   *    | (+) desligar()                                |
   *    | (+) abrirMenu()                               |
   *    | (+) fecharMenu()                              |
   *    | (+) maisVolume()                              |
   *    | (+) menosVolume()                             |
   *    | (+) ligarMudo()                               |
   *    | (+) desligarMudo()                            |
   *    | (+) play()                                    |
   *    | (+) pause()                                   |
   *    |───────────────────────────────────────────────|
   *    | (-) setVolume()                               |
   *    | (-) getVolume()                               |
   *    | (-) setLigado()                               |
   *    | (-) getLigado()                               |
   *    | (-) setTocando()                              |
   *    | (-) getTocando()                              |
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   */
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
    require_once 'Controlador/ControleRemoto.php';
    $c1 = new ControleRemoto();
    $c1->ligar();
    $c1->abrirMenu();
    $c1->maisVolume();
    $c1->abrirMenu();
// ────────────────────────────────────────────────────────────────────────────────────────────────┘
?>