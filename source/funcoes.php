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
    // | Chamando uma função na variável                              |
        $resFunc = nomeFunc();
        echo $resFunc.$pl;
    // | Direto no echo                                               |
        echo 'A frase "'.nomeFunc().'" contém '
            .strlen($resFunc).' caracteres'.$pl.$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -Parametros de funções---------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Parametros de funções                                     |
    // | Exemplo de função com parâmetros                             |
    // | Parâmetros sem valor padrão ponha primeiro, a esquerda       |
    // | os que tiveram valores padrões não sendo obrigatório         |
    // | coloque-os por último a direita                              |
        function respondeNome($nome, $sobrenome, $idade = 0) {
            global $pl, $hr, $s1, $s2;
            echo 'Seu nome é '.$s1.$nome.$s2.' e seu sobrenome '
                 .$s1.$sobrenome.$s2.$pl;
            echo 'Sua idade é '.$s1.$idade.$s2.$pl;
            echo ($idade > 18)?$s1.'você é de maior'.$s2:$s1
                 .'você é de menor'.$s2;
            echo $hr;
        }
    // | Utilizando a função                                          |
        echo respondeNome('Marcel', 'Sussai', 31);
        echo respondeNome('Gláucia', 'Mariane Rosa', 28);
        echo respondeNome('NomeTeste', 'SObrenomeTeste');
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>