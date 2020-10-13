<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $out = 0;
        foreach($nums as $val) {
            $out = $out ^ $val;
        }
        return $out;
    }
}