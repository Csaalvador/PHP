<?php

class Passaporte {
    public $numero;
    
    public function __construct($numero) {
        $this->numero = $numero;
    }
}

class Pessoa {
    public $nome;
    public $passaporte; // Uma pessoa tem um passaporte
    
    public function __construct($nome, Passaporte $passaporte) {
        $this->nome = $nome;
        $this->passaporte = $passaporte;
    }
}

$meuPassaporte = new Passaporte("123456789");
$pessoa = new Pessoa("Cauã", $meuPassaporte);


echo $pessoa->nome . " - " . $pessoa->passaporte->numero; 
// Saída: Cauã - 123456789
