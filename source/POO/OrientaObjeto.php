<?php
require_once './var_util.php';
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Orientação a objetos
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  /*    Orientação a Objetos no PHP
   *
   *    Objetos são classes que podem ser instanciadas e usadas de diversas maneiras, e classes
   *    são blocos de códigos que são inteligentes e reútilizáveis 
   *    Tambem podem ser entendidos objetos, como as variáveis que são instâncias de uma classe
   *    Um objeto possui caracteristicas, comportamentos e estados
   *
   *    Visibilidade de um Objeto
   *        (+) Publico → A classe atual e todas as outras classes
   *        (-) Privado → Somente a classe atual
   *        (#) Protegido → A classe atual e todas suas subclasses
   *    

   *   Diagrama de classes
   *  ======================================┐
   *      Caneta                            |
   *  ======================================|
   *    (+)   modelo                        |
   *    (+)   cor                           |
   *    (-)   ponta                         |
   *    (#)   carga                         |
   *    (#)   tampada                       |
   *  ======================================|
   *    (+)   escrever()                    |
   *    (+)   rabiscar()                    |
   *    (+)   pintar()                      |
   *    (+)   tampar()                      |
   *    (+)   destampar()                   |
   *  ======================================┘
   *
   *   Exemplo de um objeto
   *   Caneta
   *
   *   ATRIBUTOS - Coisas que tem: (Características)
   *      Modelo      | caractere         | string
   *      Cor         | caractere         | string
   *      Ponta       | real              | float
   *      Carga       | inteiro           | int
   *      Tampada     | lógico            | boolean
   *
   *   MÉTODOS - Coisas que faz: (comportamentos)
   *      Escreve
   *      Rabisca
   *          se tampada então
   *              ERRO
   *          senão rabisca
   *      Pinta
   *      Tampa
   *      Destampa
   *
   *   ESTADO - Como está (status)
   *      Se está tampada ou não
   *      Se está escrevendo ou não
   *      a carga ou qualquer estado de caracteristicas
   *      mutáveis
   *
   *   Métodos especiais   
   *      Métodos Acessores (getters)
   *      Métodos Modificadores (setters)
   *      Métodos Construtores ()
   * 
   *  Métodos Estáticos
   *    
   * 
   * 
   * 
   */
  //    Requerindo a classe caneta
    require_once 'caneta.php';
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Criando o Objeto caneta
    $c1 = new Caneta("BIC",0.5);
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Exibindo o objeto
    mostrarEstado($c1);
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Utilizando um método da classe
    echo $c1->escrever("Estou escrevendo").$pl;
    $c1->destampar();
    echo $c1->escrever("Agora Estou escrevendo").$hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Criando outra instancia, outro objeto
    $c2 = new Caneta("COMPACTOR", 1.0,"verde");
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Exibindo o objeto
    mostrarEstado($c2);
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Rabiscando com o objeto caneta
    $c2->destampar();
    $c2->rabiscar(16);
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
// ────────────────────────────────────────────────────────────────────────────────────────────────┘