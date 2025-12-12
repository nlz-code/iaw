<?php
function resolverEcuacion($a, $b, $c) {
    $discriminante = $b * $b - 4 * $a * $c;
    if ($discriminante > 0) {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return [$x1, $x2];
    } elseif ($discriminante == 0) {
        $x = -$b / (2 * $a);
        return [$x];
    } else {
        return [];
    }
}
print_r(resolverEcuacion(1, -3, 2)); // [2, 1]
