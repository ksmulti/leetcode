<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function decompressRLElist($nums) {
        $ret = [];
        for ($i = 0; $i < count($nums)-1; $i += 2) {
            $arr = array_fill(0, $nums[$i], $nums[$i+1]);
            $ret = array_merge($ret, $arr);
        }
        return $ret;
    }
}