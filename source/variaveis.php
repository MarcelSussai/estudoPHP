<?php
require_once 'var_util.php';
// -Variáveis---------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Variáveis                                                 |
    // | Variáveis são espaços na memória para guardar valores        |
    // | que nomeamos assim
        $nome_variavel = "Conteudo da Variavel";
    // | No exemplo é do tipo string que também pode ser feito com    |
    // | Aspas simples assim                                          |
        $variavel_str_aspas_simples = 'Aspas Simples'; 
    // | No PHP o tipo da variável é implicito no conteúdo, ou seja,  |
    // | ela não precisa ser especificada                             |
        $variavel_numeros_inteiros = 32;
        $variavel_boolean = true;
        $variavel_texto = "Este é um texto exemplar! rs";
    // | etc...                                                       |
    // | Portanto PHP é fracamente tipada.                            |
    // | Para exibir a váriavel utilizamos o comando echo             |
        echo $nome_variavel.$pl;
        echo $variavel_str_aspas_simples.$pl.$hr;
    // | como mostrar detalhes do tipo da variável com var_dump       |
        var_dump($variavel_boolean);
        echo $hr;
    // | para apagar/"matar" uma variavel                             |
        $obito = "variavel a ser morta";
        echo $obito.$pl;
        unset($obito);
    // | Verificando a variável                                       |
        if (isset($obito)){
            echo $obito;
        } else {
            echo 'variável não mais definida';
        }
        echo $pl;
    // | Variaveis de Variaveis                                       |
        $bife = "carne";
        $$bife = "outra carne";
        echo $carne;
        echo $pl.$bife.$pl;
        echo $$bife.$pl.$hr;
    // | Concatenação de variáveis                                    |
        $v01 = "Marcel ";
        $v02 = "Sussai";
        $v03 = $v01.$v02;
        echo $v03.$pl;
        echo $hr;
    // | Para nomear variavel comece com $ e os unicos caracteres     |
    // | especiais é _ comece com letras e não com números.           |
    // | Porém existem os tipos e os tipos podem ser:                 |
    // | (repare que não preciso especificar os tipos em PHP)         |
    // | (int), (integer) - molde para inteiro                        |
    // | (bool), (boolean) - converte para booleano                   |
    // | (float), (double), (real) - converte para número             |
    // | de ponto flutuante                                           |
    // | (string) - converte para string                              |
    // | (array) - converte para array                                |
    // | (object) - converte para objeto                              |
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Tipos básicos-----------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Tipos Básicos de Variáveis                                |
    // | Números inteiros (int):                                      |
        $anoNasc = 1986;
        echo $anoNasc.$pl.$hr;
    // | Assim podemos definir os tipos inteiros                      |
    // | número decimal                                               |
        $a = 2048;
        echo var_dump($a);
    // | um número negativo                                           |
        $a = -512;
        echo var_dump($a);
    // | número octal (equivalente a 83 em decimal)                   |
        $a = 0123;
        echo var_dump($a);
    // | número hexadecimal (equivalente a 26 em decimal)             |
        $a = 0x1A;
        echo var_dump($a);
    // | número binário (equivalente ao 255 decimal)                  |
        $a = 0b11111111; 
        echo var_dump($a).$hr;
    // | Números ponto flutuante (float):                             |
        $preco = 0.50;
        echo $preco.$pl;
    // | Texto (string):                                              |
        $mensagem = "Oi, tudo bem?";
        echo $mensagem.$pl;
    // | Verdadeiro ou falso (boolean):                               |
        $maioridade = true;
        echo $maioridade.$pl.$hr;
    // | são considerados falsos: false - 0 - 0.0 - "" - "0"          |
    // | array sem elementos - NULL - simpleXML de tags vazias        |
    // | qualquer outro valor é true                                  |
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Tipos Compostos---------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Tipos Compostos                                           |
    // | Arrays:
        $instrumentos = array('Bateria', 
                              'Guitara', 
                              'Contra Baixo', 
                              'Teclado');
        echo $instrumentos[2].$pl.$hr;
    // | Objetos:                                                     |
        $nascimento = new DateTime();
        var_dump($nascimento);
        echo $hr;
    // | Especiais:                                                   |
        $arquivo = fopen("exemplo.php","r");
        var_dump($arquivo);
        echo $hr;
        // $nome = $_GET["a"]; 
    // | é preciso passar a variavel por url colocando < ?a=123 >     |
    // | no final da url                                              |
    // | Ou para passar mais variáveis: < ?a=var1&b=var2 >            |
    // | var_dump($nome);                                             |
    // | para converter uma variável:                                 |
        $var_num = "123";
        $var_num_num = (int)$var_num; 
    // | forçando a mudança de tipo, independente de sua natureza     |
        echo $var_num_num.$pl.$hr;
    // | Mostrando Ip                                                 |
        $ip = $_SERVER["REMOTE_ADDR"];
        echo $ip.$pl;
    // | num servidor local ele provavelmente mostrará ::1            |
    // | mas se for hospedado na web aparecerá o ip do server         |
    // | mostrando o nome do arquivo script                           |
        $ip = $_SERVER["SCRIPT_NAME"];
        echo $ip.$pl.$hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Escopo de variáveis-----------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Escopo de variáveis                                       |
        $Nome = "Marcel";
        function teste() {
            global $Nome, $pl;
            echo $Nome.$pl;
        }
        function teste2() {
            global $pl;
            $Nome = "Sussai";
            echo $Nome.", tudo bem?".$pl;
        }
        teste();
        teste2();
        echo $hr;
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘


// -Dicas-------------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Verificando e Mudando Tipo                                |
    // | Como conseguir o tipo de uma variável                        |
        $exemplo1 = "Texto Qualquer";
        $exemplo2 = 1024;
        $exemplo3 = true;
        $exemplo4 = 64.8;
        echo gettype($exemplo1).$pl;
        echo gettype($exemplo2).$pl;
        echo gettype($exemplo3).$pl;
        echo gettype($exemplo4).$pl.$hr;
    // | Verificando por tipo                                         |
        function verificarvarsimples($var) {
            global $pl, $hr;
            if (is_string($var)) {
                echo "É uma String".$pl.$hr;
            } else if (is_int($var)) {
                echo "é um Int".$pl.$hr;
            } else {
                echo "é outra coisa, etc".$pl.$hr;
            }
        }
        verificarvarsimples($exemplo2);
    // |    Mudando tipo com settype()                                |
        settype($exemplo2, "string");
        echo $exemplo2.$pl.$hr;
        verificarvarsimples($exemplo2);
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>