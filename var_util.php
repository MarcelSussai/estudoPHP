<?php
// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Variaveis Uteis                                           |
    // | Pula linha                                                   |
        $pl = " <br>\n";
    // |--------------------------------------------------------------|
    // | barra horizontal, linha                                      |
        $hr = "\n<hr>\n";
    // |--------------------------------------------------------------|
    // | preparando exibição com <pre>                                |
        $f1 = "<pre>\n";
        $f2 = "</pre>\n";
    // |--------------------------------------------------------------|
    // | Atalho para o strong                                         |
        $s1 = "<strong>";
        $s2 = "</strong>";
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

    // | Mostrando o Estado                                           |
    function mostrarEstado($o) {
        global $f1,$f2,$hr;
        var_dump($o);
        echo $f1;
        print_r($o);
        echo $f2.$hr;
    }
    // |--------------------------------------------------------------|
?>