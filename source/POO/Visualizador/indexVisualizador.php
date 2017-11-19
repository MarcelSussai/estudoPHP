<?php
  /*    
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   INTERFACE: AcoesVideo       │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) play()                    │
   *    │ (+) pause()                   │
   *    │ (+) like()                    │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   *    ▲
   *    ║
   *    ║   ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    ╚═══╡   Video                       │
   *        │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *        │ (-) titulo                    │
   *        │ (-) avaliacao                 │
   *        │ (-) views                     │
   *        │ (-) curtidas                  │
   *        │ (-) reproduzindo              │
   *        └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   *    
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Pessoa                      │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (#) nome                      │
   *    │ (#) idade                     │
   *    │ (#) sexo                      │
   *    │ (#) experiencia               │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (#) ganharExp()               │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   *    ▲
   *    ║
   *    ║   ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    ╚═══╡   Usuario                     │
   *        │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *        │ (-) login                     │
   *        │ (-) totAssistido              │
   *        │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *        │ (+) viuMaisUm()               │
   *        └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   * 
   */
require_once './var_util.php';
require_once 'Video.php';
require_once 'Usuario.php';

$v[0] = new Video("Video 01");
$v[1] = new Video("Video 02");
$v[2] = new Video("Video 03");

$u[0] = new Usuario("Usuario 01",8,"M","login1");

mostrarEstado($u);
mostrarEstado($v);