<?php

spl_autoload_register(function($nomeClasse){
    var_dump($nomeClasse);
    $dir = $nomeClasse.".php";
    require_once($dir);
});

$teste = new Opala;
echo $teste->acelerar(80);