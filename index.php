<?php

// -Começo------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Variaveis úteis                                           |
        require_once 'var_util.php';
    // |--------------------------------------------------------------|
    // | Cabeçalho, começo da página                                  |
        include_once 'source/head.php';
    // |--------------------------------------------------------------|
    // | Antes, um olá mundo .... :)                                  |
    // |    Olá Mundo!                                                |
        echo "Hello World - Olá Mundo ! Estudo!".$pl;
        echo "Os comentários e a forma em que o código é identado
              é apenas para fins didáticos, em produção utilizo outra
              estrutura de comentário/código/resultado";
        echo $hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


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
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Exemplos de includes                                      |
        // include 'source/somar.php';
        // echo somar(2,14).$pl;
        // echo somar(2,6).$pl;
        // echo somar(200,56).$pl;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Arquivos Conteúdo-------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Arquivos                                                  |
        // require 'source/variaveis.php';
        // include 'source/operadores.php';
        // include 'source/strings.php';
        // include 'source/estruturas_de_controle.php';
        // include 'source/arrays.php';
        // include 'source/constantes.php';
        // include 'source/sessoes.php';
        // include 'source/funcoes.php';
        // include 'source/datas.php';
        // include 'source/POO/OrientaObjeto.php';
        include 'source/POO/Definicao.php';
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -Final-------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Final da Página                                           |
        finalPagina();
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>
