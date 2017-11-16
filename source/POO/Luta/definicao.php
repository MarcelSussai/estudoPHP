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
   *    │ (+) status()                  │
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
   *  ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬▬┬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *  │ Nome:           │ BadLooking  │ HeavyBrain  │ EgoFlying  │ CodingCaos  │ UfoOfStar  │
   *  │ Nacionalidade:  │ França      │ Brasil      │ EUA        │ Austrália   │ México     │
   *  │ idade:          │ 30          │ 29          │ 35         │ 28          │ 37         │
   *  │ altura:         │ 1.75        │ 1.68        │ 1.65       │ 1.93        │ 1.70       │
   *  │ peso:           │ 68,9        │ 57.8        │ 80.9       │ 81.6        │ 119.3      │
   *  │ categoria:      │ Leve        │ Leve        │ Médio      │ Médio       │ Pesado     │
   *  │ vitórias:       │ 11          │ 14          │ 12         │ 13          │ 5          │
   *  │ derrotas:       │ 2           │ 2           │ 2          │ 0           │ 4          │
   *  │ empates:        │ 1           │ 3           │ 1          │ 2           │ 3          │
   *  └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬▬┴▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   */


    require_once './var_util.php';
    require_once 'Lutador.php';

    $l[0] = new Lutador("BadLooking", "França",30,1.75,68.9,11,2,1);
    $l[1] = new Lutador("HeavyBrain", "Brasil",29,1.68,57.8,14,2,3);
    $l[2] = new Lutador("EgoFlying", "EUA",35,1.65,80.9,12,2,1);
    $l[3] = new Lutador("CodingCaos", "Austrália",28,1.93,81.6,13,0,2);
    $l[4] = new Lutador("UfoOfStar", "México",37,1.70,119.3,5,4,3);

    foreach ($l as $key) {
        $key->apresentar();
        //mostrarEstado($key);
    }