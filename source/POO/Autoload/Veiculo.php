<?php
interface Veiculo {
    public function acelerar($velo);
    public function freiar();
    public function trocarMarcha($marc);
}