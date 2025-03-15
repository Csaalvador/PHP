<?php

interface Autenticavel {
    public function login();   
}

class User implements Autenticavel{             
    public $name;
    public $email;
    private $senha;

    public function __construct($name, $email, $senha)
    {
        $this->name = $name;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function login(){
        echo("Bem vindo: {$this->name}".PHP_EOL);
    }
}

class Admin extends User {
    public function gerenciarUsuarios(){
        echo 'Usuário' .PHP_EOL;
    }

}

$user = new User("Cauã Salvador", "caua@gmail.com", "27102004");
$admin = new Admin("Admin", "admin@gmail.com", "123456");

print_r($user);

$user->login();
$admin->gerenciarUsuarios();