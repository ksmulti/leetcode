<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $lowest = PHP_INT_MAX;
        $profit = 0;
        foreach ($prices as &$val) {
            if ($val < $lowest) {
                $lowest = $val;
            }
            else if ($val - $lowest > $profit){
                $profit = $val - $lowest;
            }
        }

        return $profit;
    }
}