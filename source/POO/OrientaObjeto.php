<?php
require_once './var_util.php';

// -Orientação a objetos----------------------------------------------┐
    // ┌--------------------------------------------------------------┐
    // |    Orientação a Objetos no PHP                               |
    // | Objetos são classes que podem ser instanciadas e usadas de   |
    // | diversas maneiras, e classes são blocos de códigos que       |
    // | são inteligentes e reútilizáveis                             |
    // | Tambem podem ser entendidos objetos como as variáveis que    |
    // | são instâncias de uma classe                                 |
    // | Um objeto possui caracteristicas, comportamentos e estados   |
    // |--------------------------------------------------------------|
    // | Exemplo de um objeto                                         |
    // | Caneta                                                       |
    // |--------------------------------------------------------------|
    // | ATRIBUTOS - Coisas que tem: (Características)                |
    // |    Modelo      | caractere         | string                  |
    // |    Cor         | caractere         | string                  |
    // |    Ponta       | real              | float                   |
    // |    Carga       | inteiro           | int                     |
    // |    Tampada     | lógico            | boolean                 |
    // |--------------------------------------------------------------|
    // | MÉTODOS - Coisas que faz: (comportamentos)                   |
    // |    Escreve                                                   |
    // |    Rabisca                                                   |
    // |        se tampada então                                      |
    // |            ERRO                                              |
    // |        senão rabisca                                         |
    // |    Pinta                                                     |
    // |    Tampa                                                     |
    // |    Destampa                                                  |
    // |--------------------------------------------------------------|
    // | ESTADO - Como está (status)                                  |
    // |    Se está tampada ou não                                    |
    // |    Se está escrevendo ou não                                 |
    // |    a carga ou qualquer estado de caracteristicas             |
    // |    mutáveis                                                  |
    // |--------------------------------------------------------------|
    // | requerindo a classe caneta                                   |
        require_once 'caneta.php';
    // | Criando o Objeto caneta                                      |
        $c1 = new Caneta;
        $c1->cor = "azul";
        $c1->ponta = 0.5;
        $c1->modelo = "BIC";
        $c1->tampada = true;
    // |--------------------------------------------------------------|
    // | Mostrando o Estado                                           |
        var_dump($c1);
        print_r($c1);
        echo $hr;
    // |--------------------------------------------------------------|
    // | Utilizando um método da classe                               |
        echo $c1->escrever("Estou escrevendo").$pl;
        $c1->destampar();
        echo $c1->escrever("Agora Estou escrevendo").$hr;
    // |--------------------------------------------------------------|
    // | Criando outra instancia, outro objeto                        |
        $c2 = new Caneta;
        $c2->cor = "verde";
        $c2->ponta = 1.0;
        $c2->modelo = "TENFON";
        $c2->tampada = "true";
        var_dump($c2);

    // └--------------------------------------------------------------┘
// -------------------------------------------------------------------┘

?>