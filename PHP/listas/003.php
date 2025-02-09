<?php
 
    function adicionarLista($x){
        return [$x];
}

$lista = [];


$lista[] = adicionarLista('a');
$lista[] = adicionarLista('b');
$lista[] = adicionarLista('v');
$lista[] = adicionarLista('lista');

foreach ($lista as $itens) {
    echo $itens[0] . "\n"; 
}

