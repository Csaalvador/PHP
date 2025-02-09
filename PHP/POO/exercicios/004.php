<?php

class Animal{
    public function falar(){
        echo "Animal faz som";
    }
}

class Cachorro extends Animal{
    public function falar(){
        echo "Au au" . PHP_EOL;
    }
}

class Gato extends Animal{
    public function falar(){
        echo "Miau" . PHP_EOL;
    }
}

$c1 = new Cachorro();
$c1->falar();

$c2 = new Gato();
$c2->falar();