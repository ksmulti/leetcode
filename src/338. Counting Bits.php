<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer[]
     */
    function countBits($num) {
        $out = [];

        for ($i = 0; $i <= $num; $i++) {
            $out[$i] = ($i % 2) + $out[$i>>1];
        }

        return $out;
    }
}