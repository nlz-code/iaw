<?php

function celsiusAFahrenheit($c) {
    return ($c * 9/5) + 32;
}
function fahrenheitACelsius($f) {
    return ($f - 32) * 5/9;
}
echo celsiusAFahrenheit(25); // 77
echo fahrenheitACelsius(77); // 25
