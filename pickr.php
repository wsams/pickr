<?php

function fixNum($num) {
    $num = round(sqrt(pow($num, 2)), 0) % 126 + 32;
    if ($num < 32) return 32;
    if ($num > 126) return 126;
    return $num;
}

$cols = 40;
$rows = 20;
for ($i=1; $i<=$rows; $i++) {
    for ($j=1; $j<=$cols; $j++) {
        $r = fixNum($i + $j);
        $g = fixNum($i + $j);
        $b = fixNum($i + $j);
        print(chr(fixNum($r - $g - $b - $i - $b)));
    }
    print("\n");
}
