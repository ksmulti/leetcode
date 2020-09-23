<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $res = PHP_INT_MIN;
        $curSum = 0;

        foreach ($nums as $value) {
            $curSum = max($curSum + $value, $value);
            $res = max($res, $curSum);
        }
        return $res;
    }
}