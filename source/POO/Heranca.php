<?php

// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Herança
  // ┌─────────────────────────────────────────────────────────────────────────────────────────────┐
  // Herança e conceitos na prática!
  /*    Permite basear uma nova classe na definição de uma outra classe previamente existente.
   *    A Herança será aplicada tanto para as caracteristicas quanto para comportamentos
   *    
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Aluno                       │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (-) nome    <Pessoa>          │
   *    │ (-) idade   <Pessoa>          │
   *    │ (-) sexo    <Pessoa>          │
   *    │ (-) matr                      │
   *    │ (-) curso                     │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) fazerAniver()  <Pessoa>   │
   *    │ (-) pagarMensalidade()        │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   *    
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Professor                   │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (-) nome    <Pessoa>          │
   *    │ (-) idade   <Pessoa>          │
   *    │ (-) sexo    <Pessoa>          │
   *    │ (-) especialidade             │
   *    │ (-) salario                   │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) fazerAniver()  <Pessoa>   │
   *    │ (-) receberAum()              │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Funcionario                 │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (-) nome    <Pessoa>          │
   *    │ (-) idade   <Pessoa>          │
   *    │ (-) sexo    <Pessoa>          │
   *    │ (-) setor                     │
   *    │ (-) trabalhando               │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ (+) fazerAniver()  <Pessoa>   │
   *    │ (-) mudarTrabalho()           │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   * A                  
   * AA                     AB                      AC
   * AAA                ABA     ABB                 ACA
   *                ABAA   ABAB
   * 
   *    ↓   Especialização
   *    ↑   Generalização
   * 
   * A é ancestral de AAA mas não de AA
   * A é a raiz
   * ABAA é descendente de AB e A
   * ABA é superclasse/mãe de ABAB
   * ABAB por não ter filhas é uma Folha
   * 
   *    Tipos de Herança
   *        Implementação
   *            
   *        Diferença
   *            
   * 
   *  Classe abstrata → Não pode ser instanciada. Só pode servir como progenitora.
   *  Método abstrato → Declarado, mas não implementado na progenitora.
   *  Classe final → Não pode ser herdada por outra classe, não pode ter filhos, é uma folha.
   *  Método final → Não pode ser subscrito pelas suas sub-classes. Obrigatoriamente herdado.
   * 
   * 
   *  A classe                                            PESSOA
   *  é progenitora de                      VISITANTE     ALUNO       PROFESSOR
   *  a classe                                            ALUNO
   *  é progenitora de                            BOLSISTA     TÈCNICO
   * 
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Bolsista                    │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ () bolsa                     │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ () renovarBolsa()            │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   *    ┌▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┐
   *    │   Tecnico                     │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ () registroProfissional      │
   *    │▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬│
   *    │ () praticar()                │
   *    └▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬┘
   * 
   * 
   */
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Requerindo os arquivos necessários
   */
    require_once 'Heranca/Aluno.php';
    require_once 'Heranca/Funcionario.php';
    require_once 'Heranca/Pessoa.php';
    require_once 'Heranca/Professor.php';
    require_once 'Heranca/Bolsista.php';
    require_once 'Heranca/Visitante.php';
    require_once 'Heranca/Tecnico.php';
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Criando um aluno
   */
    $a1 = new Aluno("Marcel",31,"M","Informática","M001");
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Criando um professor
   */
    $pr1 = new Professor("Logico da Silva",46,"M","Programação",3500);
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Criando um Funcionário
   */
    $fun1 = new Funcionario("Fabiana",21,"F","Estoque", true);

    $bo1 = new Bolsista("Alguém da Silva",17,"F","Programação","M002");

    $vi1 = new Visitante;
    $vi1->setNome("TESTE");
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Mostrando o estado dos objetos criados que herdam caracteristicas da classe pessoa!
   */
    mostrarEstado($a1);
    mostrarEstado($pr1);
    mostrarEstado($fun1);
    mostrarEstado($vi1);
    mostrarEstado($bo1);
  // |─────────────────────────────────────────────────────────────────────────────────────────────|
  /*    Fazendo alterações nos objetos criados
   */
    $pr1->receberAum(600);
    mostrarEstado($pr1);
    $a1->pagarMensalidade();
    $bo1->pagarMensalidade();
    $bo1->renovarBolsa();
  // └─────────────────────────────────────────────────────────────────────────────────────────────┘


// ────────────────────────────────────────────────────────────────────────────────────────────────┘