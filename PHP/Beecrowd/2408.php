<?php

$input = trim(fgets(STDIN));

[$a, $b, $c] = array_map('intval', explode(' ', $input));

$seq = [$a, $b, $c];

rsort($seq);

echo $seq[1] . PHP_EOL;