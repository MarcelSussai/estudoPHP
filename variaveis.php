<?php
// -------------------------------------------------------------------------------------------------
    // Variáveis
    // Variáveis são espaços na memória para guardar valores que nomeamos assim
    $nome_variavel = "Tipo String/Texto";
    $nome_str = 'Aspas Simples'; 
    // No PHP o tipo da variável é implicito no conteúdo, ou seja, ela não precisa ser especificada 
    $variavel_numeros_inteiros = 32;
    $variavel_boolean = true;
    $variavel_texto = "Este é um texto exemplar! rs";
    $hr = "<hr>";
    $pl = "\n<br>\n";
    // etc... 
    // Portanto PHP é fracamente tipada. 
    echo $pl.$pl;
    echo $nome_variavel.$pl.$nome_str.$pl.$variavel_numeros_inteiros.$pl.$variavel_boolean.$pl.$variavel_texto.$pl;
    // como mostrar detalhes do tipo da variável com var_dump
    var_dump($variavel_boolean);
    // para apagar uma variavel
    $obito = "variavel a ser morta";
    echo $pl;
    echo $obito;
    echo $pl;
    unset($obito);
    if (isset($obito)){
        echo $obito;
    } else {
        echo 'variável não definida';
    }
    echo $pl;
    // Variaveis de Variaveis
    $bife = "carne";
    $$bife = "outra carne";
    echo $carne;
    echo $pl.$bife.$pl;
    echo $$bife.$pl.$hr;
    // Concatenação de textos
    $v01 = "Marcel ";
    $v02 = "Sussai";
    $v03 = $v01.$v02;
    echo $v03.$pl;
    // Para nomear variavel comece com $ e os unicos caracteres especiais é _ comece com letras e não com números.
    // Porém existem os tipo e os tipos podem ser: (repare que não preciso especificar os tipos em PHP)
    // -----------------------
    // Tipos Básicos
    echo $hr;
    echo "<h1>Tipos Básicos</h1>";
    // Números inteiros (int):
    $anoNasc = 1986;
    echo $anoNasc.$pl;
    // Números ponto flutuante (float):
    $preco = 0.50;
    echo $preco.$pl;
    // Texto (string):
    $mensagem = "Oi, tudo bem?";
    echo $mensagem.$pl;
    // Verdadeiro ou falso (boolean):
    $maioridade = true;
    echo $maioridade.$pl;
    // -----------------------
    // Tipos Compostos 
    echo $hr;
    echo "<h1>Tipos Compostos</h1>";
    // Arrays:
    $instrumentos = array('Bateria', 'Guitara', 'Contra Baixo', 'Teclado');
    // Objetos:
    $nascimento = new DateTime();
    // Especiais:
    echo $pl;
    var_dump($nascimento);
    echo $instrumentos[2].$pl;
    echo $hr;
    $arquivo = fopen("exemplo.php","r");
    var_dump($arquivo);
    echo $pl;
    // $nome = $_GET["a"]; // é preciso passar a variavel por url colocando < ?a=123 > no final da url
    // Ou para passar mais variáveis: < ?a=var1&b=var2 >
    // var_dump($nome);
    // para converter uma variável:
    $var_num = "123";
    $var_num_num = (int)$var_num; // forçando a mudança de tipo, independente de sua natureza
    echo $pl.$var_num_num.$pl;

    echo $hr.$pl;
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip.$pl;
    // num servidor local ele provavelmente mostrará ::1 mas se for hospedado na web aparecerá o ip do server
    // mostrando o nome do arquivo script
    $ip = $_SERVER["SCRIPT_NAME"];
    echo $ip;
    echo $pl;
    // ------------------------------
    // Escopo de variáveis
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
    // ------------------------------
 // -------------------------------------------------------------------------------------------------

?>