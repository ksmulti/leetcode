<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $freq = [];
        $out = [];

        foreach ($nums as $val) {
            if (array_key_exists($val, $freq)) {
                $freq[$val]++;
            }
            else {
                $freq[$val] = 1;
            }
        }

        for ($i = 0; $i < $k; $i++) {
            $val = array_keys($freq, max($freq));
            $out[] = $val[0];
            unset($freq[$val[0]]);
        }

        return $out;
    }
}