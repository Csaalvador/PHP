<?php 

class Animal {
    public function Andar(){
        echo  'O animal andou';
    }
}

class Cachorro extends Animal {
    public function Andar()
    {
        echo 'Cachorro';
    }
}

$animal = new Cachorro();
$animal->Andar();