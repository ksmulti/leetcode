<?php

class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $m = max($candies);
        $arr = [];
        foreach ($candies as &$val) {
            if ($val + $extraCandies >= $m) {
                array_push($arr, true);
            }
            else {
                array_push($arr, false);
            }
        }
        return $arr;
    }
}