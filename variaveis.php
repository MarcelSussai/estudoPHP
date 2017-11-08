<?php
// -------------------------------------------------------------------------------------------------
    // Variáveis
    // Variáveis são espaços na memória para guardar valores que nomeamos assim
    $nome_variavel = "Tipo String/Texto";
    // Ou utilizando aspas simples, assim:
    $nome_str = 'Aspas Simples';
    // No PHP o tipo da variável é implicito no conteúdo, ou seja, ela não precisa ser especificada 
    $variavel_numeros_inteiros = 32;
    $variavel_boolean = true;
    $variavel_texto = "Este é um texto exemplar! rs";
    // etc... 
    // Portanto PHP é fracamente tipada.
    $pl = "\n<br>\n"; 
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
    
    // Concatenação de textos
    $v01 = "Marcel ";
    $v02 = "Sussai";
    $v03 = $v01.$v02;
    echo $v03.$pl;
    $hr = "<hr>";
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
    $nome = $_GET["a"]; // é preciso passar a variavel por url colocando < ?a=123 > no final da url
    // Ou para passar mais variáveis: < ?a=var1&b=var2 >
    var_dump($nome);
    // para converter uma variável:
    $var_num = "123";
    $var_num_num = (int)$var_num; // forçando a mudança de tipo, independente de sua natureza
    echo $pl.$var_num_num.$pl;
    // -------------------------------------------------------------------------------------------------
?>