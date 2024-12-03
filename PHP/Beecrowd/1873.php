<?php

function determineWinner($rajesh, $sheldon) {

    $rules = [
        "tesoura" => ["papel", "lagarto"],
        "papel" => ["pedra", "spock"],
        "pedra" => ["tesoura", "lagarto"],
        "lagarto" => ["spock", "papel"],
        "spock" => ["tesoura", "pedra"]
    ];

    if ($rajesh === $sheldon) {
        return "empate";
    }

    if (in_array($sheldon, $rules[$rajesh])) {
        return "rajesh";
    }

    return "sheldon";
}


$c = (int) fgets(STDIN);


for ($i = 0; $i < $c; $i++) {

    $input = trim(fgets(STDIN));
    list($rajesh, $sheldon) = explode(" ", $input);


    $winner = determineWinner($rajesh, $sheldon);


    echo "$winner\n";
}
?>
