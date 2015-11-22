<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N, $A) {
    $counters = array_fill(0, $N, 0);
    $max = 0;
    $current_max = 0;

    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] <= $N) {
            if ($counters[$A[$i] - 1] < $max) {
                $counters[$A[$i] - 1] = $max + 1;
            } else {
                $counters[$A[$i] - 1] += 1;
            }
            
            $current_max = $counters[$A[$i] - 1] > $current_max ? $counters[$A[$i] - 1] : $current_max;
        } else {
            $max = $current_max;
        }
    }

    for ($i = 0; $i < $N; $i++) {
        if ($counters[$i] <= $max) $counters[$i] = $max;
    }
    
    return $counters;
}