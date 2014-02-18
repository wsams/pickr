<?php

function fixNum($num) {
    $num = round($num, 0) % 126 + 32;
    if ($num < 32) return 32;
    if ($num > 126) return 126;
    return $num;
}

$cols = 30;
$rows = 30;
for ($i=1; $i<=$rows; $i++) {
    for ($j=1; $j<=$cols; $j++) {
        $r = fixNum($i + $j);
        $g = fixNum($i + $j);
        $b = fixNum($i + $j);
        //print(chr($r) . chr($g) . chr($b));
        print(fixNum($r + $g + $b));
    }
    print("\n");
}
