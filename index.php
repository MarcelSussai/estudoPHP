<?php
// ────────────────────────────────────────────────────────────────────────────────────────────────┐
// Includes
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //                        Includes e Requires
  /*    Includes incluem arquivos tornando a aplicação modularizada, ou seja, você pode juntar
   *    arquivos php para formar um conteúdo que pode ser reútilizável mas com apenas um código
   *    em um arquivo separado.
   * 
   *                        Diferença Entre Require e Include
   *    require : não funciona se o arquivo não existir ou se tiver algum problema.
   *    include : tenta executar mesmo assim, além de ter mais recursos como include path que pode
   *              trazer os arquivos na pasta especificada e se não existir ele trás da raiz.
   *    Exemplos de includes
   */
    // include 'source/somar.php';
    // echo somar(2,14).$pl;
    // echo somar(2,6).$pl;
    // echo somar(200,56).$pl;
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
// ────────────────────────────────────────────────────────────────────────────────────────────────┘

// ────────────────────────────────────────────────────────────────────────────────────────────────┐
// Começo! Indice!

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Requires Necessários!  (Arquivos externos requeridos)
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Variáveis úteis!    
   *
   */ 
    require_once 'var_util.php';
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Cabeçalho, começo da página
    include_once 'source'.DIRECTORY_SEPARATOR.'head.php';
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘

  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  //    Olá mundo!
    echo "Hello World - Olá Mundo ! Estudo!".$pl;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Observação
        echo "Os comentários e a forma em que o código é identado é apenas para fins didáticos, 
              em produção utilizo outra estrutura de comentário/código/resultado".$hr;
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  //    Arquivos / Conteúdo
    // require_once 'source/variaveis.php';
    // require_once 'source/operadores.php';
    // require_once 'source/strings.php';
    // require_once 'source/estruturas_de_controle.php';
    // require_once 'source/arrays.php';
    // require_once 'source/constantes.php';
    // require_once 'source/sessoes.php';
    // require_once 'source/funcoes.php';
    // require_once 'source/datas.php';
    // require_once 'source/POO/OrientaObjeto.php';
    // require_once 'source/POO/Luta/definicao.php';
    // require_once 'source/POO/Exercicio/DefExer.php';
    // require_once 'source/POO/Heranca.php';
    // require_once 'source/POO/Polimorfismo.php';
    // require_once 'source/POO/Sobrecarga/index_sobrecarga.php';
    // require_once 'source/POO/Visualizador/indexVisualizador.php';
    // require_once 'source/POO/CPF/ValidaCPF.php';
    // require_once 'source/POO/CPF/Endereco.php';
    // require_once 'source/POO/Interface/Veiculo.php';
    // require_once 'source/POO/Autoload/IndexAutoLoad.php';
    // require_once 'source/POO/Namespaces/IndexNamespaces.php';

  // └─────────────────────────────────────────────────────────────────────────────────────────────┘
// ────────────────────────────────────────────────────────────────────────────────────────────────┘

// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Final
    finalPagina();
// ────────────────────────────────────────────────────────────────────────────────────────────────┘
  /*    ideias de Estruturas de pastas para exemplo 
   *    
   *    index.php
   *    header.php
   *    [interface]
   *    [config]
   *        config.php
   *    [class]
   *        connection.class.php
   *        autoload.class.php
   */
?>