<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        if ($n === 1) {
            return true;
        }

        while(true) {
            $total = 0;
        
            while($n > 0) {
                $total = $total + ($n%10) * ($n%10);
                $n = $n / 10;
            }

            $n = $total;

            if ($n == 1 || $n == 7) {
                return true;
            }

            if ($n < 10) {
                return false;
            }
        }
    }
}

$a = new Solution();
$a->isHappy(19);