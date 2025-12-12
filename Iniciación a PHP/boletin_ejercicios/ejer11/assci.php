<?php

echo "<table border='1'><tr><th>Decimal</th><th>Hex</th><th>Binario</th><th>ASCII</th></tr>";
for ($i = 32; $i <= 126; $i++) {
    echo "<tr><td>$i</td><td>" . dechex($i) . "</td><td>" . decbin($i) . "</td><td>" . chr($i) . "</td></tr>";
}
echo "</table>";
