<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($X, $A) {
    $got = [];
    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] <= $X) {
            if (empty($got[$A[$i]])) $got[$A[$i]] = $i;
        }

        if (count($got) == $X) return $i;
    }
    
    return -1;
}