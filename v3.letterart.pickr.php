<?php

// 97-122

function fixNum($num) {
    $num = round($num, 0);
    $num = $num % 122;
    $num = $num + 97;
    if ($num < 97) {
        return 97;
    }
    if ($num > 122) {
        return 122;
    }
    return $num;
}

$cols = 50;
$rows = 30;
for ($i=0; $i<$rows; $i++) {
    for ($j=0; $j<$cols; $j++) {
        $v = fixNum($i * $j);
        print(chr($v));
    }
    print("\n");
}
