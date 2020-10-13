<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $freqs = [];
        $n = count($nums);
        foreach ($nums as &$val) {
            if (array_key_exists($val, $freqs)) {
                $freqs[$val]++;
            }
            else {
                $freqs[$val] = 1;
            }

            if ($freqs[$val] > $n/2) {
                return $val;
            }
        }

        return 0;
    }
}