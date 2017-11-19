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
require_once 'Visualizacao.php';

$v[0] = new Video("Video 01");
$v[1] = new Video("Video 02");
$v[2] = new Video("Video 03");

$u[0] = new Usuario("Usuario 01",8,"M","login1");

$w[0] = new Visualizacao($u[0],$v[1]);
$w[1] = new Visualizacao($u[0],$v[2]);
$w[0]->avaliar();


mostrarEstado($u);
mostrarEstado($v);
mostrarEstado($w);

abstract class pai {
  public function herdado() {
   $this->sobrescrito();
  }
  protected function sobrescrito() {
   echo 'pai';
  }
}
class filha extends pai {
  protected function sobrescrito() {
   echo 'filha';
  }
}
$teste = new filha();
$teste->herdado();
