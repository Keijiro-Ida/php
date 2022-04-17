<?php

fscanf(STDIN, '%d', $N);
$A = explode(' ', trim(fgets(STDIN)));

$AliceSum = 0;
$BobSum = 0;


rsort($A);
for($i = 0; $i < $N; $i++) {
    $max = $A[0];
    array_splice($A, 0, 1);
    if($i % 2 == 0) {
        $AliceSum += $max;
    } else {
        $BobSum += $max;
    }
}

echo $AliceSum-$BobSum;
