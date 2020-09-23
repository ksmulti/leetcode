<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $n = count($nums);
        for ($i=0; $i < $n; $i++) {
            if ($nums[$i] === 0) {
                array_push($nums, 0);
                unset($nums[$i]);
            }
        }
        array_values($nums);
        return $nums;
    }
}