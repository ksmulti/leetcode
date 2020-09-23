<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function nthUglyNumber($n) {
        if ($n === 1) {
            return 1;
        }

        $i = 0;
        $j = 0;
        $k = 0;
        $uglyNumberArr = [1];
        $count = 1;

        while ($count < $n) {
            $a = $uglyNumberArr[$i]*2;
            $b = $uglyNumberArr[$j]*3;
            $c = $uglyNumberArr[$k]*5;
            $min = min($a, $b, $c);
            if ($min === $a) {
                $i++;
            }
            else if ($min === $b) {
                $j++;
            }
            else if ($min === $c) {
                $k++;
            }

            if ($min === end($uglyNumberArr)) {
                continue;
            }
            $uglyNumberArr[] = $min;
            $count++;
        }

        return end($uglyNumberArr);
    }
}