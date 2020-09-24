<?php

class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $n = strlen($J);
        $count = 0;
        for ($i = 0; $i < $n; $i++) {
            $count += substr_count($S, $J[$i]);
        }
        return $count;
    }
}