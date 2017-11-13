<?php
require_once '../var_util.php';
include_once 'head.php';
// -Exibindo a sessão-------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Exibindo a sessão                                         |
        session_start();
        echo "Meu nome é ".$_SESSION['nome']
              ." ".$_SESSION['sobrenome'].$pl;
    // |--------------------------------------------------------------|
    // | regenerando a sessão                                         |
        session_regenerate_id();
        echo session_id().$hr;
    // |--------------------------------------------------------------|
    // | Exibindo com o var dump a sessão                             | 
        var_dump($_SESSION);
        echo $hr;
    // |--------------------------------------------------------------|
    // | Exibindo caminho de arquivo da sessão                        |
        echo session_save_path().$hr;
    // |--------------------------------------------------------------|
    // | Exibindo o Status da sessão                                  |
        var_dump(session_status());
        echo $hr;
    // |--------------------------------------------------------------|
    // | Utilizando um switch para exibir e verificar                 |
        function verificaSessão() {
            switch(session_status()) {
                case PHP_SESSION_DISABLED:
                    echo "Sessões desabilitadas";
                break;
                case PHP_SESSION_ACTIVE:
                    echo "Sessões estão habilitadas e pelo menos uma existe";
                break;
                case PHP_SESSION_NONE:
                    echo "Sessões habilitadas mas nenhuma existe";
                break;
            }
        }
        verificaSessão();
        echo $hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Apagando----------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |   Apagando                                                   |
        session_unset($_SESSION["nome"], 
                      $_SESSION["sobrenome"],
                      $_SESSION["contagem"]);
        var_dump($_SESSION);
        session_abort();
        verificaSessão();
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

echo $pl;
finalPagina();
?>