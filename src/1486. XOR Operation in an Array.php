<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer $start
     * @return Integer
     */
    function xorOperation($n, $start) {
        $bxor = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($i == 0) {
                $bxor = $start + 2*$i;
            }
            else {
                $bxor = $bxor ^ ($start + 2*$i);
            }
        }
        return $bxor;
    }
}