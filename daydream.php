<?php

$s = strrev(trim(fgets(STDIN)));

$devide = ['dream', 'dreamer', 'erase', 'eraser'];
foreach( $devide as $k => $v) {
    $devide[$k] = strrev($v);
}

$b =true;

for ($i = 0; $i < strlen($s);) {
    $b2 = false;
    foreach($devide as $v) {
        if(strpos($s, $v, $i) === $i) {
            $b2 = true;
            $i += strlen($v);
        }
    }
    if(!$b2) {
        $b = false;
        break;
    }
}

echo $b ? 'YES' : 'NO';

?>
