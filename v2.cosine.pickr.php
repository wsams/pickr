<?php

$cols = 50;
$rows = 30;
for ($i=0; $i<$rows; $i++) {
    for ($j=0; $j<$cols; $j++) {
        $v = round(cos($i+$j), 0);
        if ($v % 2 == 0) {
            print(".");
        } else {
            print(" ");
        }
    }
    print("\n");
}
