<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $numbers = [];
    for ($i = 0; $i < count($A); $i++) {
        if (empty($numbers[$A[$i]]) && $A[$i] > 0) {
            $numbers[$A[$i]] = $A[$i];
        }
    }
    
    if (count($numbers) == 0) return 1;
    
    $max = max($A);

    for ($i = 1; $i < $max; $i++) {
        if (empty($numbers[$i])) {
            return $i;
        }
    }
    
    return $max + 1;
}