<?php

list($r, $g, $b) = explode(" ", fgets(STDIN));

$total = $r * 100 + $g * 10 + $b;

echo $total % 4 == 0? "Yes" : "No";

?>
