<?php

class Cadastro {
    private $nome;
    private $email;
    private $senha;

    public function setNome($v) {$this->nome = $v;}
    public function getNome():string {return $this->nome;}

    public function setEmail($v) {$this->email = $v;}
    public function getEmail():string {return $this->email;}

    public function setSenha($v) {$this->senha = $v;}
    public function getSenha():string {return $this->senha;}

    public function __toString(){
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }

    public function __construct(string $nome,string $email,string $senha){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

}