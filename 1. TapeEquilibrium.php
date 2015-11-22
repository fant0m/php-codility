<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $count = count($A);
    $left = $A[0];
    $right = array_sum($A) - $left;
    $min = abs($left-$right);
    
    for ($i = 1; $i < $count - 1; $i++) {
        $left += $A[$i];
        $right -= $A[$i];
        
        $min = abs($left-$right) < $min ? abs($left-$right) : $min;
    }
    
    return $min;
}