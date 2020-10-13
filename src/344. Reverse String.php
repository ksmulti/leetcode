<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $n = count($s);
        for ($i = 0; $i < abs($n/2); $i++) {
            $tmp = $s[$i];
            $s[$i] = $s[$n-1-$i];
            $s[$n-1-$i] = $tmp;
        }
    }
}