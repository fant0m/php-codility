<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $should_be = 0;
    for ($i = 1; $i <= count($A) + 1; $i++) {
        $should_be += $i;
    }
    $sum = array_sum($A);
    
    return $should_be - $sum;
}