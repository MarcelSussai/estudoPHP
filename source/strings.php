<?php 
require_once './var_util.php';


// -STRINGS-----------------------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Aspas                                                     |
        $aspasDuplas = "Aspas Duplas";
        $aspasSimples = 'Aspas Simples!';
        echo var_dump($aspasDuplas, $aspasSimples);
        echo $hr;
    // |--------------------------------------------------------------|
    // | Aqui a váriável funciona:                                    |
        echo "Este é o texto com $aspasDuplas".$pl;
    // |--------------------------------------------------------------|
    // | Aqui a variável NÃO funciona:                                |
        echo 'Este é o texto com $aspasSimples'.$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Manipulando Strings                                       |
    // | Criando as variaveis utilizadas                              |
        $txt1 = "texto exemplo";
        $txt2 = "TEXTO EXEMPLO";
    // |--------------------------------------------------------------|
    // | Agora exibindo em Maíusculo:                                 |
        echo strtoupper($txt1).$pl;
    // |--------------------------------------------------------------|
    // | Agora em minúsculo                                           |
        echo strtolower($txt2).$pl;
    // |--------------------------------------------------------------|
    // | Para mudar só a primeira letra                               |
        echo ucfirst($txt1).$pl;
    // |--------------------------------------------------------------|
    // | Para mudar a primeira letra de cada palavra                  |
        echo ucwords($txt1).$pl;
    // |--------------------------------------------------------------|
    // | Trocando conteúdo                                            |
        $txt3 = "estou andando aqui";
        $trocadoParado = str_replace("andando","parado", $txt3);
        echo $trocadoParado.$pl.$txt3.$pl.$hr;
    // └--------------------------------------------------------------┘

    // ┌--------------------------------------------------------------┐
    // |    Verificando Strings                                       |
    // | procurando a posição de uma string                           |
        $frase = "Estou programando PHP, é interessante e educativo";
        $palavra = "interessante";
        $q = strpos($frase, $palavra );
        echo var_dump($q);
    // |--------------------------------------------------------------|
    // | outro jeito
        $q2 = substr($frase, 0, $q);
        $q3 = substr($frase, $q);
        $q4 = substr($frase, $q + strlen($palavra), strlen($frase));
        echo var_dump($q2);
        echo var_dump($q3);
        echo var_dump($q4);
    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘
?>