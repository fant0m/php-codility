<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $should_be = 0;
    for ($i = 1; $i <= count($A); $i++) {
        $should_be += $i;
    }
    return $should_be == array_sum(array_unique($A)) ? 1 : 0;
}