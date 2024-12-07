<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo "Falou" . PHP_EOL;
        }
}

$caua = new Pessoa();
$caua->idade = 18;
$caua->falar();

echo($caua->idade);