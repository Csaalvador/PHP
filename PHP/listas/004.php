<?php

echo 'Todo List' . PHP_EOL;
echo "Fique a vontade para escrever suas tarefas:" . PHP_EOL;

$lista[] = 0;

while($x = trim(fgets(STDIN))){
    if($x == "sair"){
        break;
    }
    
    $lista[] = $x;
}

echo 'Deseja visualizar suas anotações? ';
$y = trim(fgets(STDIN));

if($y == 'sim'){
    foreach($lista as $itens){
        echo $itens . PHP_EOL;
    }
}else {
    die;
}