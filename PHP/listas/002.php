<?php 

$lista = [];

$x = trim(fgets(STDIN));
for($i = 0; $i < $x; $i++){
    $z = trim(fgets(STDIN));
    $lista[] = $z;

    if($z == 'sair'){
        break;
    }
}

        foreach($lista as $item){
            echo $item . PHP_EOL;
    }   
    


