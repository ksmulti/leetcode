<?php

class Solution {

    static function swap(&$x, &$y) {
        $tmp=$x;
        $x=$y;
        $y=$tmp;
    }

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $n = count($matrix);
        $m = ($n % 2 == 0) ? $n : $n-1;
        for ($i = 0; $i < $m; $i++) {
            self::swap($matrix[0][$i], $matrix[$i][$n-1]);
            self::swap($matrix[0][$i], $matrix[$n-1][$n-1-$i]);
            self::swap($matrix[0][$i], $matrix[$n-1-$i][0]);
        }
    }
}