<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $n = count($nums);

        if ($n == 0) {
            return 0;
        }

        $count = 0;
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i+1; $j < $n; $j++) {
                if ($nums[$i] == $nums[$j]) {
                    $count++;
                }
            }
        }
        return $count;
    }
}