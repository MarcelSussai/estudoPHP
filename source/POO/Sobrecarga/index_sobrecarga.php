<?php
require_once './var_util.php';
require_once 'Mamifero.php';
require_once 'Lobo.php';
require_once 'Cachorro.php';

$m = new Mamifero(12,5,4,"preto");
$l = new Lobo(8,12,4,"Cinza Claro");
$c = new Cachorro(6,10,4,"Marrom Escuro");

echo "O cachorro faz: ".$s1.$c->emitirSom().$s2." e o lobo ".$s1.$l->emitirSom().$s2.", o mamifero: ".$s1.$m->emitirSom().$s2.$hr;