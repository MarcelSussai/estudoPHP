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
   * 
   */
  