<?php
namespace Cliente;
class Cadastro extends \Cadastro {
    public function registrarVenda():string{
        return "Venda Registrada para o cliente ".$this->getNome();
    }
}