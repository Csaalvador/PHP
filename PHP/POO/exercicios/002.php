<?php

class Pessoa {
    public $nome;
    public $idade;
    public $cpf;

    public function __construct($nome, $idade, $cpf) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function apresentar() {
        echo "{$this->nome} tenho {$this->idade} anos e meu CPF é {$this->cpf}" . PHP_EOL;
    }
}

// Criando objetos da classe Pessoa
$p1 = new Pessoa("Cauã", "20", "5832200107");
$p2 = new Pessoa("Leonardo", "32", "14536985112");
$p3 = new Pessoa("João", "24", "5832200102");

// Chamando o método apresentar() para cada pessoa
$p1->apresentar();
$p2->apresentar();
$p3->apresentar();

?>
