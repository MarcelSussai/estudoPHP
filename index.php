<?php
// -INCLUDES----------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Includes e Requires                                       |
    // | Includes incluem arquivos tornando a aplicação modularizada, |
    // | ou seja, você pode juntar arquivos php para formar um        |
    // | conteúdo que pode ser reútilizável mas com apenas um código  |
    // | em um arquivo separado                                       |
    // | Diferença entre require e include                            |
    // | require : não funciona se o arquivo não existir ou se tiver  |
    // | algum problema, já o include ele tenta executar mesmo assim  |
    // | além de ter mais recursos como include path que ele pode     |
    // | trazer os arquivos na pasta especificada e se não existir    |
    // | ele trás da raiz                                             |
    // | mas o require é mais seguro                                  |
    // 
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Variaveis úteis                                           |
        require_once 'var_util.php';
    // | Antes, um olá mundo .... :)                                  |
    // |    Olá Mundo!                                                |
        echo "Hello World - Olá Mundo ! Editando um arquivo";
        echo $pl.$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Exemplos de includes                                      |
        // include 'somar.php';
        // echo somar(2,14).$pl;
        // echo somar(2,6).$pl;
        // echo somar(200,56).$pl;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Arquivos                                                  |
        // include 'variaveis.php';
        // include 'operadores.php';
        // include 'strings.php';
        include 'estruturas_de_controle.php';
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>
