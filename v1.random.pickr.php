<?php

$cols = 50;
$rows = 50;
for ($i=0; $i<$rows; $i++) {
    for ($j=0; $j<$cols; $j++) {
        if (rand(0, 1) === 0) {
            print(".");
        } else {
            print(" ");
        }
    }
    print("\n");
}
