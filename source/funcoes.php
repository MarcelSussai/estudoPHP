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
    // |--------------------------------------------------------------|
    // | Chamando uma função na variável                              |
        $resFunc = nomeFunc();
        echo $resFunc.$pl;
    // |--------------------------------------------------------------|
    // | Direto no echo                                               |
        echo 'A frase "'.nomeFunc().'" contém '
            .strlen($resFunc).' caracteres'.$pl.$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -Parametros de funções---------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Parametros por valor                                      |
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
    // |--------------------------------------------------------------|
    // | Utilizando a função                                          |
        echo respondeNome('Marcel', 'Sussai', 31);
        echo respondeNome('Gláucia', 'Mariane Rosa', 28);
        echo respondeNome('NomeTeste', 'SObrenomeTeste');
    // |--------------------------------------------------------------|
    // | Para um função que pode receber vários parâmetros ou não     |
        function ola() {
            $argu = func_get_args();
            var_dump($argu);
        }
    // |--------------------------------------------------------------|
    // | Utilizando a função                                          |
        echo ola("Bom Dia", "outro valor").$hr;
        echo ola("tudo bom").$hr;
        echo ola(12, 24, 46, 82).$hr;
        echo ola("quantos quiser", 32, true).$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Parametros por referência                                 |
        $x = 16;
    // |--------------------------------------------------------------|
    // | Criando a função com parametro por referência, ou seja,      |
    // | o que acontecer dentro da função com a variável se extende   |
    // | ao escopo da variável fora da função                         |
        function trocarValor(&$y) {
            $y += 16;
            return $y;
        }
    // |--------------------------------------------------------------|
    // | Exibindo-as                                                  |
        echo $x.$pl;
        echo trocarValor($x).$pl;
        echo trocarValor($x).$pl;
        echo trocarValor($x).$pl.$hr;
    // |--------------------------------------------------------------|
    // | Outro exemplo                                                |
        $oquetoca = array(
            'nome' => 'Marcel',
            'idade' => 31,
            'instrumento' => 'bateria' 
        );
        var_dump($oquetoca);
        echo $hr;
    // |--------------------------------------------------------------|
    // | com foreach                                                  |
        foreach ($oquetoca as &$valor) {
            if (gettype($valor) === 'integer') $valor +=2;
            echo $valor.$pl;
        }
        echo $hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -Novidades PHP7----------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Novidades PHP7                                            |
    // | # poder determinar o tipo do parâmetro                       |
    // | # poder dizer o tipo de retorno                              |
    // | Exemplos                                                     |
    // | Criando a função                                             |
        function soma(int ...$valores) {
            return array_sum($valores);
        }
    // |--------------------------------------------------------------|
    // | utilizando-a                                                 |
        echo soma(2, 6).$pl;
        echo soma(2,4,8,16).$pl.$hr;
    // |--------------------------------------------------------------|
    // | outro exemplo com tipo de retorno agora                      |
        function usandoResComoString(int ...$valores):string {
            return array_sum($valores);
        }
    // |--------------------------------------------------------------|
    // | Exibindo                                                     |
        var_dump(usandoResComoString(2,4,8,16,32,64));
        echo $hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -Funções recursivas------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Funções recursivas                                        |
        $h = array(
            array(
                'nome_cargo' => 'CEO',
                'subordinados' => array (
                    // inicio 01                                      |
                    array(
                        'nome_cargo' => 'Diretor Comercial',
                        'subordinados' => array(
                            // inicio 02                              |
                            array(
                                'nome_cargo' => 'Gerente de Vendas'
                            )
                            // fim 02                                 |
                        )
                    ),
                    // fim 01                                         |
                    // inicio 03                                      |
                    array(
                        'nome_cargo' => 'Diretor Financeiro',
                        'subordinados' => array(
                            // inicio 04                              |
                            array(
                                'nome_cargo' => 'Gerente de Contas',
                                'subordinados' => array(
                                    // inicio 05                      |
                                    array(
                                        'nome_cargo' => 'Supervisor'
                                    )
                                    // fim 05                         |
                                )
                            ),
                            // fim 04                                 |
                            // inicio 06                              |
                            array(
                                'nome_cargo' => 'Gerente de Compras',
                                'subordinados' => array(
                                    // inicio 07                      |
                                    array(
                                        'nome_cargo' => 'Suprimentos'
                                    )
                                    // fim 07                         |
                                )
                            )
                            // fim 06                                 |
                        )
                    )
                    // fim 03                                         |
                )
            )
        );
    // |--------------------------------------------------------------|
    // | Função recursiva                                             |
        function exibir($h) {
            $html = '<ul>';

            foreach ($h as $cargo) {
                $html .= "<li>";
                $html .= $cargo['nome_cargo'];
                if (isset($cargo['subordinados']) && 
                    count($cargo['subordinados']) > 0) {
                    $html .= exibir($cargo['subordinados']);
                }
                $html .= "</li>";
            }

            $html .= '</ul>';
            return $html;

        }
        echo exibir($h).$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

// -Funções anônimas--------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Funções anônimas                                          |
        function teste($callback) {
            // processo lento

            $callback();
        }
        teste(function(){
            echo "Terminou!";
        });
        echo $hr;
    // |--------------------------------------------------------------|
    // | Outro exemplo                                                |
        $fn = function($a){
            var_dump($a);
        };
        $fn("Olá!");
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

?>