<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
  /* Diagrama de Classe Lutador
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Lutador                     │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (-) nome                      │
   *    │ (-) nacionalidade             │
   *    │ (-) idade                     │
   *    │ (-) altura                    │
   *    │ (-) peso                      │
   *    │ (-) categoria                 │
   *    │ (-) vitorias                  │
   *    │ (-) derrotas                  │
   *    │ (-) empates                   │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) apresentar()              │
   *    │ (+) estado()                  │
   *    │ (+) ganharLuta()              │
   *    │ (+) perderLuta()              │
   *    │ (+) empatarluta()             │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ Getters e Setters             │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ Construtor                    │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Luta                        │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (-) desafiado                 │
   *    │ (-) desafiante                │
   *    │ (-) rounds                    │
   *    │ (-) aprovada                  │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) marcarLuta()              │
   *    │ (+) lutar()                   │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   *    Para Cadastrar:
   *  ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬┐
   *  │ Nome:           │ BadLooking  │ HeavyBrain  │ EgoFlying  │ CodingCaos  │ UfoOfStar  │ WeedMan  │
   *  │ Nacionalidade:  │ França      │ Brasil      │ EUA        │ Austrália   │ México     │ Jamaica  │
   *  │ idade:          │ 30          │ 29          │ 35         │ 28          │ 37         │ 42       │
   *  │ altura:         │ 1.75        │ 1.68        │ 1.65       │ 1.93        │ 1.70       │ 1.82     │
   *  │ peso:           │ 68,9        │ 57.8        │ 80.9       │ 81.6        │ 119.3      │ 108.5    │
   *  │ categoria:      │ Leve        │ Leve        │ Médio      │ Médio       │ Pesado     │ Pesado   │
   *  │ vitórias:       │ 11          │ 14          │ 12         │ 13          │ 5          │ 18       │
   *  │ derrotas:       │ 2           │ 2           │ 2          │ 0           │ 4          │ 2        │
   *  │ empates:        │ 1           │ 3           │ 1          │ 2           │ 3          │ 4        │
   *  └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬┘
   * 
   */
    require_once './var_util.php';
    require_once 'Lutador.php';
    
    $l = array();
    $l[0] = new Lutador("BadLooking", "França",30,1.75,68.9,11,2,1);
    $l[1] = new Lutador("HeavyBrain", "Brasil",29,1.68,57.8,14,2,3);
    $l[2] = new Lutador("EgoFlying", "EUA",35,1.65,80.9,12,2,1);
    $l[3] = new Lutador("CodingCaos", "Austrália",28,1.93,81.6,13,0,2);
    $l[4] = new Lutador("UfoOfStar", "México",37,1.70,119.3,5,4,3);
    $l[5] = new Lutador("WeedMan", "Jamaica",42,1.82,108.5,18,2,4);

    foreach ($l as $key) {
        $key->estado();
        $key->apresentar();
        //mostrarEstado($key);
    }