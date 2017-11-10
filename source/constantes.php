<?php
require_once 'var_util.php';

// -Constantes--------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Constantes                                                |
    // | Constantes são valores que não variam                        |
    // | Definindo constantes                                         |
        define("NOMEDACONSTANTE", "Valor da constante");
    // | Exemplo                                                      |
        define("ENDERECO", "www.marcelsussai.com");
        echo ENDERECO.$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    No PHP7 podemos fazer                                     |
        define("BD",[
            '127.0.0.1',
            'root',
            '1234',
            'test'
        ]);
    // | Exibindo                                                     |
        var_dump(BD);
        print_r(BD);
        echo $hr;
    // └--------------------------------------------------------------┘

// -------------------------------------------------------------------┘

?>