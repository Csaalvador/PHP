<?php

class Pessoa {
    public $name;
    public $sobrename;

    public function __construct($nome)
    {
        $this->name = $nome;
    }

    public function __destruct()
    {
        echo " Objeto removido";
    }

    public function olaMundo(){
        return "Olá mundo, sou $this->name";
    }
}

$pessoa = new Pessoa("Cauã");

echo $pessoa->olaMundo();

