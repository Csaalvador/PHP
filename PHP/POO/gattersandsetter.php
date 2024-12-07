<?php

class Login {
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
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
            echo 'Acessado com sucesso!';
        }else{
            echo 'dados invalidos';
        }
    }
}

// $logar = new Login();

// $logar->setEmail('teste@gmail.com');
// $logar->setSenha('123456');
// $logar->logar();