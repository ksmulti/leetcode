<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $count_arr = array_fill(0, 101, 0);

        foreach ($nums as &$val) {
            $count_arr[$val]++;
        }

        $sum_arr = array_fill(0, 101, 0);
        foreach ($sum_arr as $key => &$val) {
            if ($key == 0) {
                $val = 0;
            }
            else {
                $val = $sum_arr[$key-1] + $count_arr[$key-1];
            }
        }

        $outs = $nums;
        foreach ($outs as $key => &$val) {
            $val = $sum_arr[$nums[$key]];
        }

        return $outs;
    }
}