<?php
require_once './var_util.php';
require_once 'Veiculo.php';
abstract class Automovel implements Veiculo {
    public function acelerar($velo):string{
        global $pl,$hr,$s1,$s2;
        return "O veículo acelerou até ".$s1.$velo.$s2." Km/h".$hr;
    }
    public function freiar():string{
        global $hr;
        return "O veiculo freiou!".$hr;
    }
    public function trocarMarcha($marc):string{
        global $hr;
        return "mudou para marcha ".$marc.$hr;
    }
}