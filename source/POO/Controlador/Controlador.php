<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Controlador Interface
    interface Controlador {
        public abstract function ligar();
        public abstract function desligar();
        public abstract function abrirMenu();
        public abstract function fecharMenu();
        public abstract function maisVolume();
        public abstract function menosVolume();
        public abstract function ligarMudo();
        public abstract function desligarMudo();
    }

  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
// ────────────────────────────────────────────────────────────────────────────────────────────────┘

?>