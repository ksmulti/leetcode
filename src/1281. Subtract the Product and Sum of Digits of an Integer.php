<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        if ($n == 1) {
            return 0;
        }
        
        $pod = 1;
        $sod = 0;
        while ($n > 1) {
            $m = $n % 10;
            $n = $n / 10;

            $pod = $pod * $m;
            $sod = $sod + $m;
        }

        return $pod - $sod;
    }
}