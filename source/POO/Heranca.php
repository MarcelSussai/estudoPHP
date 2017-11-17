<?php

// ────────────────────────────────────────────────────────────────────────────────────────────────┐
//  Herança
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
   *    │ (-) cancelarMatr()            │
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
   *                ABAA    ABAB
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
   *    Classe abstrata → Não pode ser instanciada. Só pode servir como progenitora.
   *    Método abstrato → Declarado, mas não implementado na progenitora.
   *    Classe final → Não pode ser herdada por outra classe, não pode ter filhos, é uma folha.
   *    Método final → Não pode ser subscrito pelas suas sub-classes. Obrigatoriamente herdado.
   * 
   * 
   */
require_once 'Heranca/Aluno.php';
require_once 'Heranca/Funcionario.php';
require_once 'Heranca/Pessoa.php';
require_once 'Heranca/Professor.php';

$a1 = new Aluno(1,"Informática");
$a1->setNome("Marcel");
$a1->setIdade(31);
$a1->setSexo("M");

$pr1 = new Professor("Programação",3500);
$pr1->setNome("Cláudio");
$pr1->setIdade(46);
$pr1->setSexo("M");

$fun1 = new Funcionario("Estoque", true);
$fun1->setNome("Fabiana");
$fun1->setIdade(21);
$fun1->setSexo("F");

mostrarEstado($a1);
mostrarEstado($pr1);
mostrarEstado($fun1);


$pr1->receberAum(600);
mostrarEstado($pr1);