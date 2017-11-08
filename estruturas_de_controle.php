<?php
require_once 'var_util.php';
// -If--------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    if                                                        |
    // | A resposta da idade                                          |
        $idadeR = 31;
    // | Variáveis de comparação                                      |
        $idadeC = 12;
        $idadeA = 18;
        $idadeI = 60;
    // | Realizando o if()                                            |
    // | se a resposta da idade for menor ou igual a idade da criança |
    // | exiba "Criança"                                              |
        if ($idadeR <= $idadeC) {
            echo "Criança";
        }
    // | Senão se idade for maior que cirança e menor que adulto      |
    // | Então exiba "Adolescente"                                    |
        else if ($idadeR > $idadeC && $idadeR < $idadeA) {
            echo "Adolescente";
        }
    // | Senão se idade for maior ou igual a adulto e menor que idoso |
    // | exiba Adulto
        else if ($idadeR >= $idadeA && $idadeR < $idadeI) {
            echo "Adulto";
        } 
    // | senão se idade for maior ou igual a idoso exiba "Idoso       |
        else if ($idadeR >= $idadeI) {
            echo "Idoso";
        }
    // | senão exiba: "não é um valor válido!"                        | 
        else {
            echo "não é um valor válido!";
        }
    // | comparando com o if shortcut ou seja, uma maneira curta de   |
    // | validar coisas simples como a escrita de um texto            |
    // | chamado de operador ternário                                 |
    // | Exemplo:                                                     |
        echo ($idadeR < $idadeA)?"Menor de idade":"Maior de idade";
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

?>