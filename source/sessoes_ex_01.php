<?php
require_once 'var_util.php';
include_once 'head.php';
// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Exibindo a sessão                                         |
        session_start();
        echo "Meu nome é ".$_SESSION['nome']." ".$_SESSION['sobrenome'];


    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

echo $pl;
finalPagina();
?>