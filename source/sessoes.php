<?php
require_once '../var_util.php';

// -Sessões-----------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Sessões                                                   |
    // | O que são sessões                                            |
    // | variável local funciona com include no arquivo, ou na pagina |
    // | variavel de sessão se assemelham a SUPER_GLOBAIS             |
    // | funciona durante uma conexão com um site                     |
    // | ele cria um arquivo de texto temporário no cliente e         |
    // | no servidor registrando informações                          |
    // | A sessão por default dura 20min mas é configurável           |
    // | Quando acessado o site inicia uma sessão                     |
    // | Podendo ser finalizada quando quiser                         |
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Variáveis de sessão                                       |
    // | para iniciar a sessão:                                       |
        session_start();
    // |--------------------------------------------------------------|
    // | para guardar informações na sessão                           |
        $_SESSION["nome"] = "Marcel";
        $_SESSION["sobrenome"] = "Sussai";
    // |--------------------------------------------------------------|
    // | para criar o link para a exibição da sessão                  |
        $linkEx01 = "<a class='link1' href='source"
                    .DIRECTORY_SEPARATOR
                    ."sessoes_ex_01.php'>Exemplo 01</a>".$hr;
    // |--------------------------------------------------------------|
    // | Exibindo                                                     |
        echo $linkEx01;
        echo session_id().$hr;
        $_SESSION["contagem"]++;
        echo $_SESSION["contagem"].$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>