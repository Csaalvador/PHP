<?php

$input = trim(fgets(STDIN));
[$x, $y] = array_map('intval', explode(' ', $input));

$p = 2 * ($x + $y);