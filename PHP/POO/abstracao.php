<?php

abstract class Banco {

    protected $saldo;
    protected $limiteSaque;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($saque);
    abstract protected function Depositar($d);
}

class Itau extends Banco {
 
    public function Sacar($saque) {
        $this->saldo -= $saque;
        echo ' <br>Sacou: ' . $saque;
    }
    
    public function Depositar($d){
        $this->saldo += $d;
    }
}
$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Sacar(800);
echo "<hr> Saldo: " . $itau->getSaldo();
