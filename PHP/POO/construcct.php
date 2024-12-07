<?php

class Login {
    private $email;
    private $senha;
    private $nome;
    
    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getEmail(){
        return $this->email;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEmail($event){
        $email =  filter_var($event, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@gmail.com" and $this->senha == '123456'){
            echo "Bem vindo {$this->nome}, acessado com sucesso! ";
        }else{
            echo 'dados invalidos';
        }
    }
}

try {
    $logar = new login('teste@gmail.com', "123456", "Cauã Salvador");
    $logar-> Logar();
   echo $logar-> getNome();
} catch (Exception $e){
    echo $e->getMessage();
}