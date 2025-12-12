<?php

function aBinario($n) {
    $binario = "";
    while ($n > 0) {
        $binario = ($n % 2) . $binario;
        $n = intdiv($n, 2);
    }
    return $binario ?: "0";
}
echo aBinario(10); // 1010