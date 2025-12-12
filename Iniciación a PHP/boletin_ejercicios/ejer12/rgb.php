<?php

echo "<table border='1'>";
for ($r = 0; $r <= 255; $r += 64) {
    for ($g = 0; $g <= 255; $g += 64) {
        for ($b = 0; $b <= 255; $b += 64) {
            $color = "rgb($r,$g,$b)";
            echo "<tr><td>$color</td><td style='background-color:$color;'>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";
        }
    }
}
echo "</table>";
