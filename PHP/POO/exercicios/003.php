<?php

class ContaBancaria {
    private $titular;
    private $saldo;

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setTitular($t) {
        $this->titular = $t;
    }

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente" . PHP_EOL;
        } else {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado com sucesso" . PHP_EOL;
        }
    }

    public function consultaSaldo() {
        echo "Saldo atual: R$ {$this->saldo}" . PHP_EOL;
    }
}

// Criando um objeto ContaBancaria
$c1 = new ContaBancaria();
$c1->setTitular("Cauã");
$c1->setSaldo(2000);

// Exibindo informações e realizando operações
echo "Titular: " . $c1->getTitular() . PHP_EOL;
$c1->consultaSaldo();

$c1->sacar(2100); // Testando saldo insuficiente
$c1->sacar(500);  // Testando saque válido

$c1->consultaSaldo(); // Verificando saldo após o saque
?>
