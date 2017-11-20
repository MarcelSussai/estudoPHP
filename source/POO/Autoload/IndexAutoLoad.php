<?php
function __autoload($nomeClasse){
    
    var_dump($nomeClasse);
    require_once "$nomeClasse.php";
    
}
$teste = new Opala();
echo $teste->acelerar(80);
echo $teste->freiar();