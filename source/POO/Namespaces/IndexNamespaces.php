<?php
  /*    Namespaces
   *
   */
  require_once 'config.php';
  use Cliente\Cadastro;

  $cad1 = new Cadastro("Marcel","email@exemplo.com","senhadebobo");
  var_dump($cad1);
  echo $cad1->registrarVenda();