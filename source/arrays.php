<?php
require_once 'var_util.php';
// -Arrays------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Arrays                                                    |
    // | Um array é uma variável que é uma coleção de dados           |
        $frutas = array(
            "laranja", 
            "Abóbora",
            "Abacaxi",
            "uva",
            "melancia",
            "morango",
            "pera",
            "goiaba",
            "jabuticaba",
            "melão",
            "manga"
        );
    // | Veja como o var dump exibe                                   |
        var_dump($frutas);
        echo $pl;
    // | Veja como o print_r faz                                      |
        print_r($frutas);
        echo $hr;
    // | Array de duas Posições Bidimensional                         |
        $cigarros[0][0] = "Philip Morris";
        $cigarros[0][1] = "Camel";
        $cigarros[0][2] = "Marlboro";
        $cigarros[0][3] = "LM";
    // | Nova fabricante                                              |
        $cigarros[1][0] = "Souza Cruz";
        $cigarros[1][1] = "Derby";
        $cigarros[1][2] = "Dunhill";
        $cigarros[1][3] = "Minister";
    // | Exibindo                                                     |
        echo 'O cigarro que gosto de fumar é '.$cigarros[1][2].$hr;
    // | Qual o ultimo dado                                           |
        echo end($cigarros[0]).$hr;
    // | Funções para lidar com array                                 |
        $pessoas = array();
        array_push($pessoas, array(
            'Nome' => 'Marcel',
            'Idade' => 31
        ));
    // | Adicionando outra pessoa                                     |
        array_push($pessoas, array(
            'Nome' => 'Gláucia',
            'Idade' => 29
        ));
    // | Mostrando                                                    |
        var_dump($pessoas);
        echo $pl;
        print_r($pessoas);
        echo $hr;
        print_r($pessoas[1]);
        echo $hr;
        print_r($pessoas[0]['Nome']);
        echo $hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -Com JSON----------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Arrays com JSON                                           |
        $dadosEmJSON = json_encode($pessoas);
        print_r($dadosEmJSON);

    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

?>