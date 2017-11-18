<?php
require_once 'Ave.php';
class Arara extends Ave {
    
    public function __construct($peso,$idade,$membros,$corPena){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorPena($corPena);
    }
}