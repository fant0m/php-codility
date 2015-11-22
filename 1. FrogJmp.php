<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($X, $Y, $D) {
    return (int)ceil(($Y - $X) / $D);
}