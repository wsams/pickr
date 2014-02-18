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
        $g = fixNum(pow($i + $j - $r, 2));
        $b = fixNum($i + $j - $g);
        print(chr(fixNum(($r+$g+$b)-($i+$j))));
    }
    print("\n");
}
