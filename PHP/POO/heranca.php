<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $velocidade = 0;

    public function ligar(){
        echo 'bolololo';
    }
    
    public function desligar(){
        echo 'Off';
    }

    public function acelerar($acelerando){
        $this->velocidade += $acelerando;
    }

    public function freiar($freiando){
        $this->velocidade -= $freiando;
    } // Aqui foi fechado corretamente o método
}

$c1 = new Carro();
$c1->marca = 'BMW';
$c1->modelo = '320i';
$c1->ano = '2024';

$c1->acelerar(200);
$c1->freiar(20);

echo "A velocidade atual do {$c1->marca} {$c1->modelo} é {$c1->velocidade} km/h.";
?>
