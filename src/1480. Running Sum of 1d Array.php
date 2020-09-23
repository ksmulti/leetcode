<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $sum_arr = [];
        foreach ($nums as $key => $val) {
            if ($key == 0) {
                $sum_arr[$key] = $val;
            }
            else {
                $sum_arr[$key] = $val + $sum_arr[$key-1];
            }
        }

        return $sum_arr;
    }
}