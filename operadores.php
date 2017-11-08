<?php

include 'var_util.php';

// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Operador de atribuição                                    |
        $variavel = "valor atribuido com o igual";
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Operadores de Concatenação                                |
        $nome = "Marcel ";
        $sobrenome = "Sussai ";
        echo $nome.$sobrenome.$pl.$hr;
    // | O ponto (.) concatena as variaveis                           |
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Operadores Aritméticos                                    |
        $a = 4;
        $b = 2;
        $valorTotal = 2;
        echo $valorTotal.$pl;
    // | Soma                                                         |
        $valorTotal += $a;
        echo $valorTotal.$pl;
        $valorTotal = $a + $b;
        echo $valorTotal.$pl.$hr;
        $valorTotal = 2;
    // | Subtração                                                    |
        $valorTotal -= $a;
        echo $valorTotal.$pl;
        $valorTotal = $a - $b;
        echo $valorTotal.$pl.$hr;
        $valorTotal = 2;
    // | Multiplicação                                                |
        $valorTotal *= $a;
        echo $valorTotal.$pl;
        $valorTotal = $a * $b;
        echo $valorTotal.$pl.$hr;
        $valorTotal = 2;
    // | Divisão                                                      |
        $valorTotal /= $a;
        echo $valorTotal.$pl;
        $valorTotal = $a / $b;
        echo $valorTotal.$pl.$hr;
        $valorTotal = 2;
    // | Resto módulo                                                 |
        $valorTotal %= $a;
        echo $valorTotal.$pl;
        $valorTotal = $a % $b;
        echo $valorTotal.$pl.$hr;
        $valorTotal = 2;
    // | Exponenciação                                                |
        $valorTotal **= $a;
        echo $valorTotal.$pl;
        $valorTotal = $a ** $b;
        echo $valorTotal.$pl.$hr;
    // | Com ponto flutuante:                                         |
        $v1 = 16.4;
        $v2 = 15.6;
        $r1 = $v1 + $v2;
        echo $r1.$pl;
        $r1 *= .2; 
        echo $r1.$pl.$hr;
    // └--------------------------------------------------------------┘ 
// -------------------------------------------------------------------┘  


// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Operadores de comparação                                  |
        unset($a,$b);
        $a = 16;
        $b = 16.0;
    // | Maior que e menor que                                        |
        var_dump($a > $b);
        var_dump($a < $b);
    // | Operador igual                                               |
        var_dump($a == $b);
    // | Operador idêntico                                            |
        var_dump($a === $b);
    // | Operador diferente                                           |
        var_dump($a != $b);
    // | Operador diferente também o tipo                             |
        var_dump($a !== $b);
        echo $hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Incrementais e Decrementais                               |
        unset($a,$b);
        $a = 2;
        $a++;
        echo $a++.$pl;
        echo $a--.$pl;
        echo ++$a." ".$a.$pl;
        --$a;
        echo $a.$pl.$hr;
	// └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Operadores Novos PHP7                                     |
        unset($a,$b);
        $a = 16;
        $b = 32;
    // | Spaceship                                                    |
        var_dump($a <=> $b);
        echo $pl.$hr;
    // | se $a for maior trás 1                                       |
    // | se forem iguais trás 0                                       |
    // | se $b for maior trás -1                                      |
    // | Operador de verificação                                      |
        $a = NULL;
        $b = 6;
        $c = 12;
        echo $a ?? $b ?? $c;
        echo $pl.$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -------------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Exemplo ordem de execução                                 |
    // | Operador &&                                                  |
        $resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
        var_dump($resultado);
    // | Operador ||                                                  |
        $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; 
        $teste = 32;
        var_dump($teste);
        var_dump($resultado);
        print_r($resultado);
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>