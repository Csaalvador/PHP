<?php
while (true) {
    $input = trim(fgets(STDIN));
    [$x, $y] = array_map('intval', explode(' ', $input));

    if ($x == 0 && $y == 0) {
        break;
    }

    echo ($x + $y) . PHP_EOL;
}
?>
