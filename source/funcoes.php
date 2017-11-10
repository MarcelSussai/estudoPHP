<?php
require_once 'var_util.php';
// -Funções-----------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Funções                                                   |
    // | Criando funções                                              |
    // | Essa é uma função simples                                    |
        function nomeFunc(){
            return "Conteúdo da função";
        }
    // | Chamando uma função na variável                                          |
        $resFunc = nomeFunc();
        echo $resFunc.$pl;
    // | Direto no echo                                               |
        echo 'A frase "'.nomeFunc().'" contém '
            .strlen($resFunc).' caracteres'.$pl.$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

?>